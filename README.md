# J&J IBD Summit 2026 — Website

PHP website for the J&J IBD Summit 2026 (3–4 July 2026, Marriott Marquis Dubai Creek).
Production domain: **https://ibdsummit2026.com**

It is a server-rendered PHP site (no database, no build step) using shared
partials and a single content config, deployed to Hostinger over FTP via GitHub
Actions.

---

## How it's structured

All repeated content lives in **one place** so you don't edit the same thing on
seven pages:

```
includes/
  config.php     ← EDIT CONTENT HERE: event facts, nav, faculty, programme,
                   nursing agenda, footer links
  helpers.php    ← render helpers (faculty cards, agenda, fact bar) + e() escaper
  bootstrap.php  ← loads config + helpers; required at the top of every page
  head.php       ← <head>, banner strip, header + nav   (shared chrome)
  footer.php     ← footer + scripts                       (shared chrome)
  cta.php        ← summit "Register your interest" band
  cta_guide.php  ← patient-guide "Take the guide with you" band
  .htaccess      ← denies direct web access to this folder

index.php  programme.php  nursing.php  faculty.php
venue.php  contact.php    register.php
guide/index.php  guide/stage-1.php … guide/stage-6.php

assets/    css / js / images / faculty headshots / guide illustrations
*.pdf      one-pagers + full patient guide
.htaccess  clean URLs (no .php), HTTPS + legacy .html redirects, caching
router.php LOCAL DEV ONLY — emulates the .htaccess clean URLs
sitemap.xml  robots.txt
.github/workflows/deploy.yml  FTP auto-deploy on push to main
```

Each page is thin: it sets `$title`, `$desc`, `$active`, then includes the
partials. Example:

```php
<?php require __DIR__ . '/includes/bootstrap.php';
$title = 'Venue — J&J IBD Summit 2026';
$desc  = '...';
$active = 'venue';
require partial('head'); ?>
   ...page-specific HTML...
<?php require partial('cta'); require partial('footer'); ?>
```

### Common edits

| I want to…                         | Edit                                              |
|------------------------------------|---------------------------------------------------|
| Change dates / venue / email       | `$SITE` in `includes/config.php`                  |
| Add / change a faculty member      | `$CHAIRS` or `$SPEAKERS` in `config.php` (+ drop the headshot in `assets/faculty/`) |
| Edit the scientific agenda         | `$PROGRAMME` in `config.php`                      |
| Edit the nursing agenda            | `$NURSING` in `config.php`                        |
| Change a nav item or footer link   | `$MAIN_NAV` / `$GUIDE_NAV` / `$FOOTER_*` in `config.php` |
| Bump CSS/JS cache after edits      | `ASSET_VER` in `config.php`                       |
| Edit guide stage prose             | the relevant `guide/stage-N.php` (long-form content is inline) |

A faculty member with a photo uses `'img' => 'file.jpg'`; one awaiting a
headshot uses `'initials' => 'AB'` instead.

---

## Run it locally

Requires PHP 8.x (no other dependencies).

```bash
php -S localhost:8000 router.php
# open http://localhost:8000/
```

`router.php` reproduces the production clean URLs (`/programme`, `/guide/stage-1`)
on the built-in server. It is **not** uploaded to production (the live site uses
`.htaccess`).

---

## Deploy (GitHub Actions → Hostinger FTP)

Every push to `main` deploys automatically via
[`.github/workflows/deploy.yml`](.github/workflows/deploy.yml). You can also run
it manually from the **Actions** tab (“Run workflow”).

### One-time setup

1. **Push the repo** (already pointed at `meetingmindsexperts/ibdsummit2026`):
   ```bash
   git push -u origin main
   ```
2. **Add repository secrets** — GitHub → Settings → Secrets and variables →
   Actions → *New repository secret*:

   | Secret           | Value (from Hostinger → Files → FTP Accounts)        |
   |------------------|------------------------------------------------------|
   | `FTP_SERVER`     | FTP host, e.g. `ftp.ibdsummit2026.com` or the IP     |
   | `FTP_USERNAME`   | FTP account username                                 |
   | `FTP_PASSWORD`   | FTP account password                                 |
   | `FTP_SERVER_DIR` | Target dir, usually `/public_html/`                  |

   Hostinger supports FTPS — the workflow uses `protocol: ftps`. If your plan
   only offers plain FTP, change `protocol` to `ftp` in the workflow.

3. Push to `main` (or run the workflow manually). The action uploads only
   changed files and keeps a sync-state file on the server.

### Notes

- The site must be served from the **web root** (`public_html`) because all
  internal links and asset paths are root-relative (`/assets/...`, `/programme`).
- `includes/` and `router.php` are never web-served (`.htaccess` + workflow
  exclude). `*.md` and CI files are excluded from upload too.

---

## Registration form → Supabase

The **register** page (`/register`) submits server-side (PHP → Supabase REST)
into a `registrations` table. The contact form is left as a front-end demo.

How it works: `register.php` calls `process_form('register')`
([includes/forms.php](includes/forms.php)) which validates server-side, checks a
honeypot, inserts via [includes/supabase.php](includes/supabase.php) using the
**service_role** key, then Post/Redirect/Gets to `/register?sent=1`. Form fields
and columns are defined in `form_specs()` — add a field there + a column in the
schema to extend it.

### One-time setup

1. **Create the table** — run [supabase/schema.sql](supabase/schema.sql) in the
   Supabase SQL editor (creates `registrations`, enables RLS with no public
   policies so only the server can read/write).
2. **Add two GitHub secrets** (Settings → Secrets and variables → Actions):

   | Secret                  | Value (Supabase → Project Settings → API)            |
   |-------------------------|------------------------------------------------------|
   | `SUPABASE_URL`          | Project URL, e.g. `https://xxxx.supabase.co`         |
   | `SUPABASE_SERVICE_KEY`  | **service_role** key (secret — bypasses RLS)         |

   The deploy writes these into `includes/secrets.php` on the runner (git-ignored,
   never committed) and uploads it; `includes/.htaccess` blocks it from the web.
3. **Local testing:** copy `includes/secrets.example.php` →
   `includes/secrets.php` and fill in the same two values. Without it, the form
   validates + shows a graceful error but doesn't insert.

View submissions in the Supabase **Table editor** → `registrations`.

---

## Before public launch (carried over from the demo)

- **Registration** is wired to Supabase (above). The **contact form**
  (`contact.php`) is still a front-end demo — wire it to a handler only if you
  want contact messages captured too.
- Confirm faculty photo consent/usage rights; 3 faculty still show initials
  (Hala Ibrahim, Khalid Alejji, Mohammed Nabil) — add headshots to
  `assets/faculty/` and switch `initials` to `img` in `config.php`.
- Confirm medical/regulatory sign-off for the patient-guide imagery.
- Confirm the official contact email in `$SITE['email']`.

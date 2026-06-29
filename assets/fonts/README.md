# Brand fonts — Johnson Display / Johnson Text

> **Licensing note:** Johnson Display and Johnson Text are proprietary
> Johnson & Johnson typefaces. The files currently in use were supplied by the
> project owner. They must only be used for authorized J&J brand work — do not
> redistribute. If/when official J&J-portal files are available, swap them in
> (same filenames) and they take effect immediately.

## Files in use (web-optimized woff2)

| File                  | Family          | Source weight        | Used for                          |
|-----------------------|-----------------|----------------------|-----------------------------------|
| `JohnsonDisplay.woff2`| Johnson Display | Bold (700)           | headings, taglines (`--font-display`, mapped 400–700) |

Body text (`--font-text`) intentionally uses **Arial** (J&J's specified
fallback) — Johnson Text is not loaded as a web font. The raw source downloads
(`assets/Johnson Display/`, `assets/JOHNSONTEXT Regular.ttf`) are
**git-ignored** — only the optimized woff2 above ships.

## How they're wired

- `@font-face` declarations: top of [`assets/css/site.css`](../css/site.css)
- Families referenced via `--font-display` / `--font-text` (in `:root`)
- Preloaded in [`includes/head.php`](../../includes/head.php) to avoid a flash
  of fallback text

## To replace or add weights

1. Drop the new `.woff2` in this folder (convert from ttf/otf with
   `fonttools`: `python3 -c "from fontTools.ttLib import TTFont; f=TTFont('In.ttf'); f.flavor='woff2'; f.save('Out.woff2')"`).
2. Update the `@font-face` block in `site.css` (add a `700` face for a real
   bold cut, etc.).
3. Bump `ASSET_VER` in `includes/config.php`, commit, push (auto-deploys).

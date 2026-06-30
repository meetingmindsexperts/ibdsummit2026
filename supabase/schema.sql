-- ============================================================
-- J&J IBD Summit 2026 — form storage (Supabase / Postgres)
-- Run once in the Supabase SQL editor for your project.
--
-- The PHP backend inserts with the SECRET key (sb_secret_…), which
-- bypasses row-level security. We enable RLS and add NO public
-- policies, so the publishable/anon key can neither read nor write —
-- submissions stay private to the secret key (and the dashboard).
-- ============================================================

-- Registration form (register page)
create table if not exists public.ibd_registrations (
  id               uuid primary key default gen_random_uuid(),
  created_at       timestamptz not null default now(),
  first_name       text not null,
  last_name        text not null,
  email            text not null,
  phone            text,
  profession       text,
  specialty        text,
  organisation     text,
  country          text,
  consent_hcp      boolean default false,
  consent_contact  boolean default false,
  source           text default 'website'
);

create index if not exists idx_ibd_registrations_created
  on public.ibd_registrations (created_at desc);

-- Lock the table down: RLS on, no public policies (only the secret key,
-- used by the PHP backend, can write/read).
alter table public.ibd_registrations enable row level security;

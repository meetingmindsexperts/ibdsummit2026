-- ============================================================
-- J&J IBD Summit 2026 — form storage (Supabase / Postgres)
-- Run once in the Supabase SQL editor for your project.
--
-- The PHP backend inserts with the service_role key, which
-- BYPASSES row-level security. We enable RLS and add NO public
-- policies, so the anon/public key can neither read nor write —
-- submissions stay private to the service role (and dashboard).
-- ============================================================

-- Registration form (register page)
create table if not exists public.registrations (
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

create index if not exists idx_registrations_created on public.registrations (created_at desc);

-- Lock the table down: RLS on, no public policies (only the service_role,
-- used by the PHP backend, can write/read).
alter table public.registrations enable row level security;

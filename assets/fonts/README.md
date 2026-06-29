# Brand fonts — Johnson Display / Johnson Text

These are **licensed Johnson & Johnson fonts**. They are proprietary, not
available on Google Fonts or any public CDN, and the J&J license restricts them
to authorized J&J brand work. Do **not** download them from font-piracy sites
(OnlineWebFonts etc.) — that violates the license and is a supply-chain risk.

Get the `.woff2` files from the **J&J brand portal** or your J&J agency contact.

## How to activate

1. Drop these files into this folder (`assets/fonts/`):

   | File                          | Family           | Weight |
   |-------------------------------|------------------|--------|
   | `JohnsonDisplay-Regular.woff2`| Johnson Display  | 400    |
   | `JohnsonDisplay-Bold.woff2`   | Johnson Display  | 700    |
   | `JohnsonText-Regular.woff2`   | Johnson Text     | 400    |
   | `JohnsonText-Bold.woff2`      | Johnson Text     | 700    |

   (If your licensed files have different names or weights, either rename them
   to match, or update the `@font-face` block to match — see step 2.)

2. In [`assets/css/site.css`](../css/site.css), **uncomment** the `@font-face`
   block near the top (the one referencing `/assets/fonts/...`).

3. Bump `ASSET_VER` in [`includes/config.php`](../../includes/config.php) to
   cache-bust, commit, and push (auto-deploys).

That's it — `--font-display` / `--font-text` already reference these families,
so every heading and body element picks them up automatically. Until the files
are present, the site uses **Arial**, which is J&J's specified fallback.

`.woff2` alone covers all current browsers. Add `.woff` only if you must support
very old browsers (the licensed package may include it).

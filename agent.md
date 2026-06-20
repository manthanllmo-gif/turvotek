# Developer Agent Guidelines: Turvotek Solar Website

This document outlines the architecture, rules, and guidelines for any AI coding assistant or agent working on the Turvotek codebase. Adhering to these instructions ensures seamless, aesthetic, and reliable development.

---

## 🚫 CRITICAL: DO NOT OPEN BROWSER
* **Rule**: Under no circumstances should you run the `browser_subagent` tool or try to open a browser window. The browser subagent is explicitly disabled for this project environment.
* **Testing alternative**: To check page layouts or connection status, use backend test scripts or the `read_url_content` tool on `http://127.0.0.1:8080/`.

---

## 📖 Mandatory Reference Documents

Before making any changes, you must review and adhere to these specification files:

1. **`Design.md` (Design System)**
   * **Foundational Colors**: HP-inspired Electric Blue (`#024ad8`) as the lone signal CTA accent; near-black ink (`#1a1a1a`) for text/headlines; Cloud (`#f7f7f7`) and Paper (`#ffffff`) for surfaces.
   * **Typography**: Forma DJR Micro (geometric grotesque) at weights 400/500/700. Substitutes are Inter or Manrope.
   * **Shapes**: Cards and image frames have a soft border-radius of `16px` (`{rounded.xl}`). Interactive components like buttons have `4px` (`{rounded.md}`).
   * **Shadows**: Flat layout with a Soft Lift shadow (`0 2px 8px rgba(26, 26, 26, 0.08)`) on product and pricing cards.

2. **`backendskills.md` (Backend Doctrine)**
   * **Layered Architecture**: Route → Controller → Service → Repository. No layer-skipping.
   * **Validation**: Always validate external inputs using Zod.
   * **Error Handling**: Centrally route errors to Sentry. No silent failures or swallowed exceptions.
   * **Configuration**: Read configurations strictly from the unified config file.

---

## 🛠️ Local Development Environment

* **Site URL**: `http://127.0.0.1:8080`
* **Database**: SQLite (managed via SQLite Modern AST Driver inside WordPress).
* **PHP Binary Location**: `D:\turvotek\php\php.exe`
* **Run Server Test**:
  To test page generation or database connectivity, run custom PHP commands from the terminal:
  ```powershell
  D:\turvotek\php\php.exe -r "include 'wp-load.php'; echo get_option('siteurl');"
  ```

---

## 💻 Theme Directory Structure

The active WordPress theme is located at `d:\turvotek\wp-content\themes\turvotek\`.

* **`css/index.css`**: The central stylesheet containing all layout, design tokens, typography overrides, and custom UI components.
* **`functions.php`**: Handlers for WooCommerce filters, WhatsApp redirects, and main actions.
* **`header.php` / `footer.php`**: Global page structure, navigation links, and the side cart drawer.
* **`front-page.php`**: Home page sliders and content structure.
* **Custom Pages**: `page-about.php`, `page-founders.php`, `page-contact.php`.

---

## 🎯 Key Implemented Features & Business Rules

### 1. Floating WhatsApp Button
* **Location**: Styled fixed in `footer.php`, appearing on the bottom-right corner of both mobile and desktop viewports.
* **Target Number**: `+91 94250 11303` (formatted as `919425011303` for the WhatsApp URL).

### 2. "Rate on Request" WooCommerce Button
* **Rules**: 
  * If a product has no price or a price of `0`, the "Add to Cart" button in the catalog loop and the product single page is dynamically replaced by a green **"Rate on Request"** button.
  * The button redirects to WhatsApp with a pre-filled message:
    `Hello, I am interested in the product: {Product Name}. Could you please share the pricing and details?`
* **Implementation**: Managed via the `woocommerce_loop_add_to_cart_link` filter and single product action hooks in `functions.php`.

### 3. Side Mini Cart Drawer
* **Behavior**: Interactive cart drawer that slides in from the side when adding items to the cart, improving user conversion rates without forcing page changes.

### 4. Equal-Height Premium Shop Cards
* **Layout**: CSS Grid is enforced on shop archive listings (`ul.products:not(.product-slider ul.products)`) using:
  ```css
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: var(--spacing-xl);
  ```
* **Alignment**: Cards stretch to match the height of the tallest card in the row, ensuring a clean grid layout. Text clamps (`-webkit-line-clamp: 2`) are applied to titles with a minimum height of `42px`.

---

## 🌟 Web Development Best Practices

* **No Placeholders**: Never use dummy images. If new image assets are required, use media files or local assets from `d:\turvotek\assetspictures\`.
* **Rich Aesthetics**: All UIs must look highly polished and premium. Incorporate subtle hover transitions, clear HSL-tailored colors, and harmonious gradients.
* **Mobile Responsiveness**: Always verify grid structures, navigation menus, and section pads under collapsing container scopes. Touch targets must be at least `44px` on mobile screen frames.

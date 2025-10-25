# QRMMS - Tailwind CSS Setup

This project uses **Tailwind CSS v3.4.x** - the latest stable version.

## Installation Complete ✅

Tailwind CSS has been successfully installed and configured for your PHP project.

## File Structure

```
CreatifyStudio/
├── css/
│   └── style.css          # Generated Tailwind CSS (minified)
├── src/
│   └── input.css          # Source CSS with Tailwind directives
├── node_modules/          # Node.js dependencies
├── index.php              # Main page (using CDN)
├── index-local.php        # Alternative version (using local CSS)
├── tailwind.config.js     # Tailwind configuration
├── package.json           # Node.js package configuration
└── README.md              # This file
```

## Available Commands

- **Development Build (with file watching):**
  ```bash
  npm run build-css
  ```
  
- **Production Build (minified):**
  ```bash
  npm run build-css-prod
  ```

## Usage

### Option 1: Using CDN (index.php)
The main `index.php` file uses Tailwind CSS via CDN for quick development.

### Option 2: Using Local Build (index-local.php)
The `index-local.php` file uses the locally built CSS file for production.

## Tailwind CSS Configuration

The `tailwind.config.js` file is configured to scan:
- `*.{html,js,php}` files in the root directory
- `src/**/*.{html,js,php}` files
- `pages/**/*.{html,js,php}` files  
- `components/**/*.{html,js,php}` files
- `templates/**/*.{html,js,php}` files

## Development Workflow

1. **Make changes to your PHP files** using Tailwind utility classes
2. **Run the build command** to generate updated CSS:
   ```bash
   npm run build-css-prod
   ```
3. **Use `index-local.php`** to see your changes with the local CSS build

## For Development with Auto-rebuild

Run this command to automatically rebuild CSS when you make changes:
```bash
npm run build-css
```

This will watch for changes and rebuild automatically.

## Tailwind CSS Version

- **Installed Version:** v3.4.x (latest stable)
- **Features:** All utility classes, responsive design, dark mode support
- **Build Tool:** Tailwind CLI

## Next Steps

1. Customize your `tailwind.config.js` file to add custom colors, fonts, etc.
2. Add more PHP pages and components
3. Use the local CSS build (`index-local.php`) for production
4. Consider adding PostCSS plugins for additional functionality

## Useful Tailwind CSS Resources

- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Tailwind UI Components](https://tailwindui.com/)
- [Tailwind CSS Cheat Sheet](https://nerdcave.com/tailwind-cheat-sheet)
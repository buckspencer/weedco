# WordPress Theme Development Template

A clean WordPress theme development environment using Docker, based on the Underscores starter theme.

## Quick Start

1. Clone this repository
2. Rename the theme:
   - Change directory name in `wp-content/themes/weedco` to your theme name
   - Search and replace "weedco" in all files with your theme name
   - Search and replace "WeedCo" with your theme name (case-sensitive)
   - Update theme information in `wp-content/themes/your-theme/style.css`

3. Start the development environment:
   ```bash
   docker-compose up -d
   ```

4. Access WordPress:
   - Site: http://localhost:8000
   - Admin: http://localhost:8000/wp-admin
   - Default credentials:
     - Username: admin
     - Password: password

## Development

### Prerequisites
- Docker
- Docker Compose
- Node.js (for theme development)
- Composer (for PHP dependencies)

### Theme Development
The theme is based on Underscores (_s) and includes:
- Modern development tools
- Sass support
- npm scripts for development
- Docker for local WordPress environment

### Directory Structure
```
.
├── docker-compose.yml    # Docker configuration
├── wp-content/
│   └── themes/
│       └── weedco/      # Theme directory (rename this)
└── .gitignore
```

### Development Workflow
1. Make changes to theme files in `wp-content/themes/your-theme/`
2. Use npm scripts for development tasks:
   ```bash
   cd wp-content/themes/your-theme
   npm install
   npm run watch
   ```

## Customizing for a New Client
1. Update theme information in `style.css`
2. Replace screenshot.png with client's theme screenshot
3. Update theme colors and styles in `assets/css/`
4. Customize header.php and footer.php
5. Add client-specific functionality in `functions.php`

## License
GNU General Public License v2 or later

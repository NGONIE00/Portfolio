# Portfolio Website

A modern, responsive portfolio website built with Laravel and Tailwind CSS, featuring dark mode support, secure contact form, and a clean, professional design.

![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=flat-square&logo=tailwind-css)
![Vite](https://img.shields.io/badge/Vite-7.0-646CFF?style=flat-square&logo=vite)

## ✨ Features

### 🎨 Design & User Experience
- **Dark/Light Mode Toggle** - Seamless theme switching with persistent user preference
- **Responsive Design** - Fully responsive layout that works on all devices
- **Smooth Animations** - Elegant transitions and hover effects
- **Modern UI** - Clean, professional design with Tailwind CSS

### 🔒 Security Features
- **Strict Email Validation** - RFC-compliant email validation with DNS checking
- **Rate Limiting** - Protection against spam (5 requests per minute per IP)
- **Honeypot Protection** - Bot detection and prevention
- **XSS Protection** - Input sanitization on all form fields
- **CSRF Protection** - Laravel's built-in CSRF token validation

### 📧 Contact Form
- Real-time email validation with visual feedback
- Character counter for message field
- Comprehensive server-side validation
- Secure message logging

### 🚀 Performance
- Optimized asset bundling with Vite
- Fast page load times
- Efficient CSS with Tailwind's JIT compiler

## 🛠️ Tech Stack

### Backend
- **Laravel 12.0** - PHP web framework
- **PHP 8.2+** - Modern PHP features

### Frontend
- **Tailwind CSS 4.0** - Utility-first CSS framework
- **Vite 7.0** - Next-generation frontend tooling
- **Vanilla JavaScript** - No framework dependencies

### Development Tools
- **Laravel Pint** - Code style fixer
- **PHPUnit** - Testing framework
- **Laravel Pail** - Real-time log viewer

## 📋 Prerequisites

Before you begin, ensure you have the following installed:
- **PHP 8.2** or higher
- **Composer** - PHP dependency manager
- **Node.js** (v18+) and **npm** - For frontend assets
- **Git** - Version control

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/NGONIE00/Portfolio.git
   cd Portfolio
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your environment**
   Edit the `.env` file with your database and application settings:
   ```env
   APP_NAME="Portfolio"
   APP_URL=http://localhost:8000
   ```

6. **Create database** (if using SQLite)
   ```bash
   touch database/database.sqlite
   ```

7. **Run migrations** (if needed)
   ```bash
   php artisan migrate
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   ```

   Or for development with hot reload:
   ```bash
   npm run dev
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser.

## 📁 Project Structure

```
my_app/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php    # Main portfolio controller
├── public/
│   ├── profile.jpg                        # Profile image
│   └── tech_logo/                         # Technology logos
├── resources/
│   ├── css/
│   │   └── app.css                        # Main stylesheet with dark mode
│   ├── js/
│   │   └── app.js                         # JavaScript for interactions
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php              # Main layout
│       ├── portfolio/
│       │   ├── index.blade.php           # Home page
│       │   ├── about.blade.php           # About page
│       │   ├── projects.blade.php        # Projects page
│       │   └── contact.blade.php         # Contact page
│       └── components/                   # Reusable Blade components
├── routes/
│   └── web.php                            # Application routes
└── tailwind.config.js                     # Tailwind configuration
```

## 🎯 Usage

### Pages

- **Home** (`/`) - Landing page with introduction and tech stack
- **About** (`/about`) - Personal information and background
- **Projects** (`/projects`) - Portfolio projects showcase
- **Contact** (`/contact`) - Contact form for inquiries
- **Download CV** (`/download-cv`) - PDF resume download

### Dark Mode

The dark mode toggle is located in the header. The user's preference is automatically saved in localStorage and persists across page reloads. The theme also respects system preferences if no manual selection has been made.

### Contact Form

The contact form includes:
- Name validation (2-100 characters, letters only)
- Email validation (RFC + DNS compliant)
- Subject validation (3-150 characters)
- Message validation (10-1000 characters)

All submissions are logged to `storage/logs/laravel.log` for review.

## 🔐 Security Features

### Email Validation
- **RFC 5322 compliant** - Follows email standards
- **DNS validation** - Verifies domain existence
- **Client-side validation** - Real-time feedback
- **Server-side validation** - Double-check on backend

### Spam Protection
- **Rate limiting** - 5 requests per minute per IP address
- **Honeypot field** - Hidden field that bots may fill
- **Input sanitization** - XSS protection on all inputs

### Data Protection
- **CSRF tokens** - Prevents cross-site request forgery
- **Input sanitization** - HTML special characters escaped
- **Secure logging** - IP and user agent tracking

## 🎨 Customization

### Colors & Theme

Edit `tailwind.config.js` to customize the color scheme:

```javascript
colors: {
  primary: {
    // Your primary color palette
  }
}
```

### Dark Mode Colors

Modify CSS variables in `resources/css/app.css`:

```css
:root {
  --site-bg: #ffffff;
  /* Light theme colors */
}

html.dark {
  --site-bg: #111827;
  /* Dark theme colors */
}
```

### Content

Update portfolio information in:
- `app/Http/Controllers/PortfolioController.php` - Dynamic content
- `resources/views/portfolio/` - Page templates

## 🧪 Development

### Running Tests
```bash
php artisan test
```

### Code Style
```bash
composer pint
```

### Development Mode
```bash
# Run Laravel server and Vite dev server concurrently
composer dev
```

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👤 Author

**Ngonidzashe Hunzvi**

- GitHub: [@NGONIE00](https://github.com/NGONIE00)
- LinkedIn: [Ngonidzashe Hunzvi](https://www.linkedin.com/in/ngonidzashe-hunzvi)
- Email: ngoniehunzvie@gmail.com

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP framework
- [Tailwind CSS](https://tailwindcss.com) - The CSS framework
- [Vite](https://vitejs.dev) - The build tool

## 📄 Changelog

### Version 1.0.0
- Initial release
- Dark/light mode support
- Secure contact form
- Responsive design
- Portfolio pages

---

⭐ If you find this project helpful, please consider giving it a star!

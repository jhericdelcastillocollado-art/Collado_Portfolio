# Collado Portfolio

A personal portfolio website built with Laravel 12, showcasing the work, skills, and educational background of **Jheric Joshua D. Collado** — a Full-Stack Developer & UI Designer and BSIT student based in Bangued, Abra.

## Features

- **Hero Section** — Display name, title, profile photo, and call-to-action buttons
- **About** — Short bio with profile photo and a skills/technologies grid
- **Education** — Academic timeline with degree and institution details
- **Projects** — Card-based grid layout for featured work with category tags and technology labels
- **Contact** — Contact information (email, phone, location), social media links, and a mailto-based contact form
- **Dark Mode** — Toggle with `localStorage` persistence and OS `prefers-color-scheme` detection
- **Responsive Design** — Mobile-first layout with a hamburger navigation menu
- **Scroll Animations** — IntersectionObserver-based fade-in effects with reduced-motion support

## Technologies

- **Backend:** Laravel 12 (PHP ^8.2)
- **Templating:** Laravel Blade
- **Styling:** Custom CSS with CSS custom properties (variables), dark mode palette, responsive breakpoints
- **JavaScript:** Vanilla JS (scroll animations, theme toggle, mobile menu, smooth scrolling)
- **Build Tool:** Vite
- **Fonts:** Google Fonts — Inter (body) + Sora (headings)

## Project Structure

```
├── app/
├── public/
│   ├── assets/
│   │   ├── css/styles.css          # Main stylesheet (custom CSS, dark mode, responsive)
│   │   └── js/app.js               # Vanilla JS (animations, theme, navigation)
│   └── images/                     # Profile and project images
├── resources/
│   └── views/
│       ├── home.blade.php          # Main page composition
│       ├── layouts/app.blade.php   # Master layout (HTML shell, meta tags, scripts)
│       ├── partials/
│       │   ├── navbar.blade.php    # Sticky navigation with dark mode toggle
│       │   └── footer.blade.php    # Footer with links and social icons
│       └── sections/
│           ├── hero.blade.php      # Hero/landing section
│           ├── about.blade.php     # About me + skills
│           ├── education.blade.php # Education timeline
│           ├── projects.blade.php  # Project cards grid
│           └── contact.blade.php   # Contact info + form
├── routes/web.php                  # Single route — all portfolio data defined here
├── composer.json
├── package.json
└── vite.config.js
```

## Portfolio Data

All portfolio content (personal information, skills, education, and projects) is defined in `routes/web.php` and passed to the Blade views via `compact()`. To update any content, edit the arrays in that file.

### Current Sections

| Section | Details |
|---------|---------|
| **Personal Info** | Name, title, location, email, phone, GitHub, LinkedIn, Twitter, Dribbble |
| **Skills** | PHP, Laravel, JavaScript, TypeScript, React, Vue.js, Node.js, HTML5, CSS3, Tailwind CSS, MySQL, PostgreSQL, Git, Docker, AWS, Figma |
| **Education** | BS in IT (Data Center College, 2023–2026), Humanities & Social Science (Divine World College, 2020–2022) |
| **Projects** | Patient Record Management System (VB.NET) |

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/jhericdelcastillocollado-art/Collado_Portfolio.git
   cd Collado_Portfolio
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Install Node dependencies**

   ```bash
   npm install
   ```

4. **Set up environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Start the development server**

   ```bash
   php artisan serve
   ```

   In a separate terminal, run the Vite dev server for front-end assets:

   ```bash
   npm run dev
   ```

6. **Open in browser**

   Visit [http://localhost:8000](http://localhost:8000)

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

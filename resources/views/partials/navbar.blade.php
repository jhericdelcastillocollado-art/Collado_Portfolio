<header id="navbar" class="navbar">
    <div class="navbar-inner">
        <a href="#home" class="navbar-logo">
            <span class="logo-icon">A</span>
            <span class="logo-text">{{ $personal['name'] ?? 'Portfolio' }}</span>
        </a>

        <nav class="navbar-links" id="nav-links" aria-label="Main navigation">
            <a href="#home" class="nav-link active">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#education" class="nav-link">Education</a>
            <a href="#projects" class="nav-link">Projects</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>

        <div class="navbar-actions">
            <button id="theme-toggle" class="theme-toggle" aria-label="Toggle dark mode" type="button">
                <svg class="icon-sun" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                <svg class="icon-moon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
            </button>

            <a href="#contact" class="btn btn-nav-primary">Let's Talk</a>

            <button id="hamburger" class="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" type="button">
                <svg class="hamburger-open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 18H4M20 12H4M20 6H4"/></svg>
                <svg class="hamburger-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M18 6L6 18M18 18L6 6"/></svg>
            </button>
        </div>
    </div>

    <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
        <nav class="mobile-nav" aria-label="Mobile navigation">
            <a href="#home" class="mobile-link active">Home</a>
            <a href="#about" class="mobile-link">About</a>
            <a href="#education" class="mobile-link">Education</a>
            <a href="#projects" class="mobile-link">Projects</a>
            <a href="#contact" class="mobile-link">Contact</a>
            <a href="#contact" class="btn btn-primary mobile-cta">Let's Talk</a>
        </nav>
    </div>
</header>

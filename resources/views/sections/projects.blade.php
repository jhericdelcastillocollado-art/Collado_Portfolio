<section id="projects" class="section projects">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <span class="section-label">Projects</span>
            <h2 class="section-title">Featured Work</h2>
        </div>

        <div class="projects-grid">
            @foreach($projects as $index => $project)
                <article class="project-card animate-on-scroll" style="animation-delay: {{ $index * 0.1 }}s">
                    <div class="project-image">
                        <div class="project-image-placeholder">
                            <img src="./images/a3.jpg" width="400" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" opacity="0.25"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                        </div>
                        <div class="project-overlay">
                            <div class="project-actions">
                                @if($project['github'] !== '#')
                                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer" class="project-btn" aria-label="View source code on GitHub">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                                        Code
                                    </a>
                                @endif
                                @if($project['demo'] !== '#')
                                    <a href="{{ $project['demo'] }}" target="_blank" rel="noopener noreferrer" class="project-btn project-btn-primary" aria-label="View live demo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                        Live Demo
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="project-meta">
                            <span class="project-category">{{ $project['category'] }}</span>
                        </div>
                        <h3 class="project-title">{{ $project['title'] }}</h3>
                        <p class="project-desc">{{ $project['description'] }}</p>
                        <div class="project-techs">
                            @foreach($project['technologies'] as $tech)
                                <span class="tech-tag">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

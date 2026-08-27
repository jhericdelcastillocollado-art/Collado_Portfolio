<section id="about" class="section about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image-col animate-on-scroll">
                <div class="about-image">
                    <div class="about-image-placeholder">
                     <img src="./images/a1.jpg" alt="Profile photo">
                      <!--  <span>Add your photo here</span> -->
                    </div>
                </div>
            </div>

            <div class="about-text-col animate-on-scroll">
                <span class="section-label">About Me</span>
                <h2 class="about-title">A passionate developer who cares about craft.</h2>
                <p class="about-bio">
                   Motivated and hardworking applicant seeking an opportunity 
                   to contribute my skills, knowledge, and dedication to a growing organization. 
                   I am eager to learn, adaptable to new environments, and committed to performing 
                   my responsibilities efficiently and professionally.
                </p>
                <p class="about-bio">
                    When I'm not coding, you'll find me exploring new technologies, contributing to open-source
                    projects, or sharing knowledge through technical blog posts and community meetups. I believe
                    in writing code that is not only functional but also maintainable and scalable.
                </p>

                <div class="about-skills">
                    <h3 class="skills-heading">Skills & Technologies</h3>
                    <div class="skills-grid">
                        @foreach($skills as $skill)
                            <span class="skill-tag">{{ $skill }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

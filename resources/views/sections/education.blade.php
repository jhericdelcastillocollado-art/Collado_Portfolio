<section id="education" class="section education">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <span class="section-label">Education</span>
            <h2 class="section-title">My Academic Journey</h2>
        </div>

        <div class="timeline">
            @foreach($education as $index => $edu)
                <div class="timeline-item animate-on-scroll" style="animation-delay: {{ $index * 0.15 }}s">
                    <div class="timeline-marker">
                        <div class="timeline-dot"></div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3 class="timeline-degree">{{ $edu['degree'] }}  {{ $edu['field'] }}</h3>
                                <p class="timeline-institution">{{ $edu['institution'] }}</p>
                            </div>
                            <span class="timeline-date">{{ $edu['start'] }} — {{ $edu['end'] }}</span>
                        </div>
                        <p class="timeline-description">{{ $edu['description'] }}</p>
                        @if(!empty($edu['achievements']))
                            <div class="timeline-achievements">
                                @foreach($edu['achievements'] as $achievement)
                                    <span class="achievement-tag">{{ $achievement }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

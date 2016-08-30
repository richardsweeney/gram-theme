<section id="about" class="about-home-wrapper">
    <div class="image-left">
        @if ( $about_home_image )
            <img src="{{ $about_home_image->url }}" alt="">
        @endif
    </div>
    <div class="about-text-right">
        <h3>{{ $about_home_title }}</h3>
        <p class="text">{{ $about_home_text }}</p>
    </div>
</section>


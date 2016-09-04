<section class="container about-home-wrapper">
    <div class="image-container">
        @if ( $about_home_image )
            <img src="{{ $about_home_image->url }}" alt="">
        @endif
    </div>
    <div class="about-text">
        <h2>{{ $about_home_title }}</h2>
        <p class="text">{{ $about_home_text }}</p>
    </div>
</section>


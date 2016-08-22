<section class="about-home-wrapper">

	<h3>{{ $about_home_title }}</h3>

	<div class="mg"></div>
	<div class="image-left">
        @if ( $about_home_image )
        <img src="{{ $about_home_image }}" alt="">
        @endif
    </div>
	<div class="about-text-right">
      	<p>{{ $about_home_text }}</p>
    </div>
</section>

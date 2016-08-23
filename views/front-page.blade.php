@extends( 'views.master' )

@section( 'main' )

<!-- INTRO
    ================================================== -->
	{{--@include( 'views.common.frontpage-sections.intro' )--}}

<!-- MAILCHIMP SIGN-UP FORM
    ================================================== -->
	{{--@include( 'views.common.frontpage-sections.signup-form', [ 'register_text' => $register_text ] )--}}

<!-- VIDEO SECTION
    ================================================== -->
	{{--@include( 'views.common.frontpage-sections.video-home', [ 'video_title' => $video_title, 'video_text' => $video_text, 'video_url' => $video_url ] )--}}

<!-- ABOUT SECTION
    ================================================== -->
	{{--@include( 'views.common.frontpage-sections.about-home', [ 'about_home_title' => $about_home_title, 'about_home_text' => $about_home_text, 'about_home_image' => $about_home_image ] )--}}

@endsection



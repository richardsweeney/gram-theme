@extends( 'views.master' )

@section( 'main' )

<!-- ABOUT
    ================================================== -->
	@include( 'views.pages.about', [
		'about_bg_img'        => $about_bg_img,
		'about_feature_title' => $about_feature_title,
		'about_feature_text'  => $about_feature_text,
		'about_bg_image_2'    => $about_bg_image_2,
		'about_post_title'    => $about_post_title,
		'about_post_article'  => $about_post_article,
		'about_side_img'      => $about_side_img,
	] )

@endsection


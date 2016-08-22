@extends( 'views.master' )

@section( 'main' )

<article {{ post_class() }}>

    <header>
        <h1>{{ the_title() }}</h1>
    </header>

    @if ( has_post_thumbnail() )
        <div class="post-thumbnail-container">
            {{ the_post_thumbnail( 'large' ) }}
        </div>
    @endif

    <!-- <div class="post-content">
        {{ the_content() }}
    </div> -->
    @if ( $about_bg_img )
    <img src="{{ $about_bg_img }}" alt="">
    @endif

    <h2>{{ $about_feature_title }}</h2>
    <p>{{ $about_feature_text }}</p>

    @if ( !empty( $about_bg_image_2 ) )
        <img src="{{ $about_bg_image_2 }}" alt="">
    @endif
    <h3>{{ $about_post_title }}</h3>
    <p>{{ $about_post_article }}</p>
    @if ( $about_side_img )
        <img src="{{ $about_side_img }}" alt="">
    @endif

</article>

@endsection





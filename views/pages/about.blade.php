@extends( 'views.master' )

@section( 'main' )

</div>

<article id="about-page" {{ post_class() }}>

    <!-- <div id="js-parallax-window" class="parallax-window">
        <div class="parallax-static-content">
            <h1>{{ the_title() }}</h1>
        </div>
        @if ( has_post_thumbnail() )
        <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}')"></div>
        @endif
    </div> -->


    @if ( $about_bg_img )
    <img src="{{ $about_bg_img }}" alt="">
    @endif

    <div class="about-feature-msg">
        <h3>{{ $about_feature_title }}</h3>
        <p>{{ $about_feature_text }}</p>
    </div>

    <div class="container">


    <div class="about-article">

        <h3>{{ $about_post_title }}</h3>

        <div class="article-left">
            <p>{{ $about_post_article }}</p>
        </div>

        <div class="about-sidebar-right">

            <p class="about-sidebar">{{ $about_post_sidebar }}</p>

            <div class="img-container">
            @if ( !empty( $about_bg_image_2 ) )
                <img src="{{ $about_bg_image_2 }}" alt="">
            @endif
            </div>

        </div>
    </div>

</article>


@endsection






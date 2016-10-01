<div id="js-parallax-window" class="parallax-window">

    @while( have_posts() )
        {{ the_post() }}

        <div id="js-parallax-window" class="parallax-window">
            <div class="parallax-static-content container">
                <h1>{{ the_title() }}</h1>
                {{ the_content() }}
            </div>

            @if( has_post_thumbnail() )
                <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}') 0 0 / cover;"></div>
            @endif
        </div>

    @endwhile

    <div class="landing-page-image-credit">
        Image: Unpackaged, <a href="http://www.beunpackaged.com">www.beunpackaged.com</a>
    </div>

</div>


<div id="js-parallax-window" class="parallax-window">

    @while( have_posts() )
        {{ the_post() }}

        <div class="parallax-static-content container">
            <h1>{{ the_title() }}</h1>
            {{ the_content() }}
        </div>

        @if( has_post_thumbnail() )
            <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}') no-repeat center top;"></div>
        @endif

    @endwhile

</div>

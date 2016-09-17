
@if ( has_post_thumbnail() )
    <div id="js-parallax-window" class="parallax-window">
        <div
                id="js-parallax-background"
                class="parallax-background"
                style="background: url('{{ the_post_thumbnail_url() }}') 0 0 / cover;"
        ></div>
    </div>
@endif

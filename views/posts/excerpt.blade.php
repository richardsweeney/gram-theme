<article id="post-{{ get_the_ID() }}" {{ post_class( 'card-outer' ) }} itemscope itemtype="http://schema.org/BlogPosting">

    <div class="card">
        <header class="card-header">

            <h3 class="entry-title"><a href="{{ get_permalink() }}" rel="bookmark">{{ the_title() }}</a></h3>

            <div class="post-comments-badge">
                <a href="{{ comments_link() }}">{{ shipyard_render_svg( 'comments' ) }}<br>
                    {{ comments_number( 0, 1, '%') }}</a>
            </div>
        </header>

        <footer>
            <div class="post-details">
                <time datetime="{{ get_the_time( 'U' ) }}">{{ shipyard_render_svg( 'clock-o' ) }} {{ date_i18n( get_option( 'date_format' ), get_the_time('U') ) }}</time>
            </div>
        </footer>

        @if ( has_post_thumbnail() )
            <div class="card-image"><a href="{{ the_permalink() }}">{{ the_post_thumbnail('small-banner') }}</a></div>
        @endif

        <div class="card-copy">
            {{ the_excerpt() }}
            <a href="{{ the_permalink() }}">{{ __( 'Read more', 'gram' ) }}</a>
        </div>

        <footer>
            @if ( has_tag() )
{{--                {{ shipyard_render_svg( 'tags' ) }} {{ the_tags('') }}--}}
            @endif
        </footer>

    </div>

</article>

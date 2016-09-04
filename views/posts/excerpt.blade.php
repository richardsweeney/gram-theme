<article id="post-{{ get_the_ID() }}" {{ post_class( 'card-outer' ) }} itemscope itemtype="http://schema.org/BlogPosting">

    <div class="card">
        <div class="card-header">

            <header>
                <h3 class="entry-title"><a href="{{ get_permalink() }}" rel="bookmark">{{ the_title() }}</a></h3>
            </header>

            <div class="post-details">
                {{ shipyard_render_svg( 'clock' ) }}<time datetime="{{ get_the_time( 'U' ) }}">{{ date_i18n( get_option( 'date_format' ), get_the_time('U') ) }}</time>

                @if( have_comments() )
                    <div class="post-comments-badge">
                        <a href="{{ comments_link() }}"> {{ comments_number( 0, 1, '%') }}</a>
                    </div>
                @endif
            </div>
        </div>

        @if( has_post_thumbnail() )
            <div class="card-image"><a href="{{ the_permalink() }}">{{ the_post_thumbnail('small-banner') }}</a></div>
        @endif

        <div class="card-copy">
            <p>{{ the_excerpt() }}</p>
        </div>

    </div>

</article>

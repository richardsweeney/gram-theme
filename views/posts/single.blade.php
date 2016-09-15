
<article id="post-{{ get_the_ID() }}" {{ post_class( 'single-post' ) }} itemscope itemtype="http://schema.org/BlogPosting">

    <div class="post-details">
        {{ shipyard_render_svg('user') }} {{ get_the_author() }}
        {{ shipyard_render_svg('clock-o') }} <time datetime="{{ the_time( 'U' ) }}">{{ the_date() }}</time>
        {{ shipyard_render_svg('folder') }} {{ the_category( ', ') }}

        @if ( has_tag() )
            {{ shipyard_render_svg( 'tags' ) }} {{ the_tags('') }}
        @endif

        <div class="post-comments-badge">
            <a href="{{ comments_link() }}">{{ shipyard_render_svg('comments') }} {{ comments_number( 0, 1, '%') }}</a>
        </div><!-- post-comments-badge -->
    </div>

    <div class="card-copy">
      <p>{{ the_content() }}</p>
    </div>

</article>



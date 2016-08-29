<article id="post-{{ get_the_ID() }}" {{ post_class( 'excerpt' ) }} itemscope itemtype="http://schema.org/BlogPosting">
  <div class="card">
    <div class="card-header">

        @if( is_single() ) : {{ the_title( '<h3 class="entry-title">', '</h3>' ) }}
        @else
           {{ the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ) }}
        @endif
        <div class="post-details">
            <i class="fa fa-user"></i> {{ get_the_author() }}
            <i class="fa fa-clock-o"></i> <time>{{ the_date() }}</time>
            <i class="fa fa-folder"></i> {{ the_category( ', ') }}
            <div class="post-comments-badge">
                <a href="{{ comments_link() }}"><i class="fa fa-comments"></i> {{ comments_number( 0, 1, '%') }}</a>
            </div><!-- post-comments-badge -->

            {{ edit_post_link(' Edit', '<i class="fa fa-pencil"></i>') }}
        </div>
    </div>

    @if( has_post_thumbnail() )
        <div class="card-image"><a href="{{ the_permalink() }}">{{ the_post_thumbnail() }}</a></div>
    @endif

    <div class="card-copy">
      <p>{{ the_excerpt() }}</p>
    </div>
  </div>

</article>

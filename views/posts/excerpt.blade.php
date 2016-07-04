<article id="post-{{ get_the_ID() }}" {{ post_class( 'excerpt' ) }} itemscope itemtype="http://schema.org/BlogPosting">

    <header>
        <h3 itemprop="headline"><a href="{{ the_permalink() }}">{{ the_title() }}</a></h3>
    </header>

    @if( has_post_thumbnail() )
        <p><a class="no-border" href="{{ the_permalink() }}">{{ the_post_thumbnail( 'large' ) }}</a></p>
    @endif

    <div itemprop="articleBody">
        {{ the_excerpt() }}
    </div>

    <p><a href="{{ the_permalink() }}">{{ __( 'Read more', 'gram' ) }}</a></p>

    <footer>
        <p>
            {{ __( 'Published by', 'gram' ) }}
            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                <a href="{{ get_author_posts_url( get_the_author_meta( 'ID' ) ) }}"><span itemprop="name">{{ get_the_author() }}</span></a>
            </span>
            {{ __( 'on', 'gram' ) }}
            <time class="blogDate" itemprop="datePublished" datetime="{{ the_time( 'Y-m-d H:i:s' ) }}">{{ date_i18n( get_option( 'date_format' ) ) }}</time>
            <meta itemprop="dateModified" content="{{ the_modified_time( 'Y-m-d H:i:s' ) }}">
            {{ __( 'in', 'gram' ) }} {{ the_category( ', ') }}.
            {{ the_tags( __( 'Tags: ', 'gram' ), ', ', ' ' ) }}
        </p>
        <meta itemprop="publisher" content="GRAM Malmö">
    </footer>

    {!! shipyard_render_image_metadata() !!}

</article>

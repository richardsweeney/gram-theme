<article id="post-{{ get_the_ID() }}" {{ post_class( 'single-post-article' ) }} itemscope itemtype="http://schema.org/BlogPosting">

    <meta itemprop="mainEntityOfPage" content="{{ the_permalink() }}">
    <meta itemprop="dateModified" content="{{ the_modified_time('c') }}">
    <meta itemprop="author" content="{{ the_author() }}">

    @if ( has_post_thumbnail() )
        <div class="single-post-feat-image">
            {{ the_post_thumbnail( 'large', ['itemprop' => 'image' ] ) }}
        </div>
    @endif

    <div class="centered-content single-post-main-content">

        <header class="single-post-header">
            <h1 itemprop="headline" class="entry-title">{{ the_title() }}</h1>

            <time itemprop="datePublished" datetime="{{ get_the_time( 'c' ) }}">
                {{ date_i18n( get_option( 'date_format' ), get_the_time('U') ) }}
            </time>
            @if ( has_category() )
                | <span class="post-categories">
                    {{ the_category(', ') }}
                </span>
            @endif
        </header>

        <div class="post-content" itemprop="articleBody">
            {{ the_content() }}
        </div>

        <footer>

            @if ( has_tag() )
                <p class="post-tags">
                    {{ shipyard_render_svg('tags') }} {{ the_tags('') }}
                </p>
            @endif

            @if ( function_exists( 'sharing_display' ) )
                {!! sharing_display( '' ) !!}
            @endif

            @if ( $custom_likes )
                {!! $custom_likes->post_likes( '' ) !!}
            @endif

        </footer>

    </div>

</article>

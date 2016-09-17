<article id="post-{{ get_the_ID() }}" {{ post_class( 'card-outer' ) }} itemscope itemtype="http://schema.org/BlogPosting">

    <meta itemprop="mainEntityOfPage" content="{{ the_permalink() }}">
    <meta itemprop="dateModified" content="{{ the_modified_time('c') }}">
    <meta itemprop="author" content="{{ the_author() }}">

    <div class="card">

        @if ( has_post_thumbnail() )
            <div class="card-image">
                <a href="{{ the_permalink() }}">
                    {{ the_post_thumbnail( 'small-banner', ['itemprop' => 'image'] ) }}
                </a>
            </div>
        @endif

        <header class="card-header">
            <h2 itemprop="headline" class="entry-title"><a href="{{ get_permalink() }}" rel="bookmark">{{ the_title() }}</a></h2>
        </header>

        <footer>
            <div class="post-details">
                <time itemprop="datePublished" datetime="{{ get_the_time( 'c' ) }}">
                    {{ date_i18n( get_option( 'date_format' ), get_the_time('U') ) }}
                </time>
                @if ( has_category() )
                    | <span class="post-categories">
                        {{ the_category(', ') }}
                    </span>
                @endif
            </div>
        </footer>

        <div class="card-copy">
            <div itemprop="description">
                {{ the_excerpt() }}
            </div>
            <a class="button see-through" itemprop="url" href="{{ the_permalink() }}">{{ __( 'Continue Reading', 'gram' ) }}</a>
        </div>

    </div>

</article>

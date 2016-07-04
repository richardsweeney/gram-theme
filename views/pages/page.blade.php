<article {{ post_class() }}>

    <header>
        <h1>{{ the_title() }}</h1>
    </header>

    @if ( has_post_thumbnail() )
        <div class="post-thumbnail-container">
            {{ the_post_thumbnail( 'large' ) }}
        </div>
    @endif

    <div class="post-content">
        {{ the_content() }}
    </div>

</article>

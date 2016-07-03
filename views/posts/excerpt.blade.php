<article id="post-{{ get_the_ID() }}" {{ post_class( 'excerpt ') }}>

    <header>
        <h2><a href="{{ the_permalink() }}">{{ the_title() }}</a></h2>
    </header>

    {{ the_post_thumbnail( 'full' ) }}

    {{ the_excerpt() }}

    <p><a href="{{ the_permalink() }}">{{ __( 'Read more', 'gram' ) }}</a></p>

    <footer>
        <p>{{ __( 'Published', 'gram' ) }}: <time datetime="{{ the_time( 'Y-m-d H:i:s' ) }}">{{ date_i18n( get_option( 'date_format' ) ) }}</time> {{ __( 'in', 'gram' ) }} {{ the_category( ', ') }}. {{ the_tags( __( 'Tags: ', 'gram' ), ', ', ' ' ) }}</p>
    </footer>

</article>

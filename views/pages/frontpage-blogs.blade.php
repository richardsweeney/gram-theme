@while( $blogs->have_posts() )
    {{ $blogs->the_post() }}
    @include( 'views.posts.excerpt' )
@endwhile
{{ wp_reset_postdata() }}

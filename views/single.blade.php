@extends( 'views.master' )

@section( 'main' )

@if( has_post_thumbnail() )
    <header>
        <div id="js-parallax-window" class="parallax-window" style="background: url('{{ wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) }}') no-repeat; background-size: cover;">
            <div class="parallax-static-content">
            <h1 class="page-title">{{ the_title() }}</h1>
            </div>
            <div id="js-parallax-background" class="parallax-background"></div>
        </div>
    </header>
@endif
    <!-- <div class="parallax-window" data-z-index="100" data-parallax="scroll" data-image-src="{{ shipyard_get_featured_image_src() }}"></div> -->
    <div class="single-post-wrapper">
        <section class="posts-list">

            @while( have_posts() )
                {{ the_post() }}
                @include( 'views.posts.single' )
            @endwhile

        </section>

        @if(isset(is_single_post)) {
            @include( 'views.common.sidebar' )
        }
    </div>
@endsection

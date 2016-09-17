@extends( 'views.master' )

@section( 'main' )

    <article id="products" {{ post_class() }}>

        @if ( ! empty( $products ) )

            <div class="portfolio-items">

                @foreach( $products as $product )
                    <div class="single-product item">
                        <div class="portfolio-item hovereffect">

                            <a href="{{ the_permalink() }}" class="thumb">
                                <figure class="img-product">
                                    {!! get_the_post_thumbnail( $product, 'large' ) !!}
                                </figure>


                            <div class="overlay">
                                <a href="{{ get_post_permalink( $product->ID ) }}" class="category-btn"><span
                                            class="description">{{ $product->post_title }}</span></a>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        @endif

    </article>

@endsection





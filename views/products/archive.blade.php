@extends( 'views.master' )

@section( 'main' )

    <article id="products">
        <section class="container products-container">

            <ul class="products-list" id="products-list">
                @foreach ( $products as $product )
                    <li class="products-list__parent-list-item">
                        <a href="#" @click.prevent="showModal({{ $loop->index }})">
                            {!! $product['thumbnail'] !!}
                            <div class="category-text-container">
                                <h2 class="category-text-container__header">{{ $product['title'] }}</h2>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

        </section>

        <div class="modal">
            <input class="modal-state" id="modal-1" type="checkbox" />
            <div class="modal-fade-screen">
                <div class="modal-inner">
                    <a href="#" class="modal-close" @click.prevent="hideModal()"></a>

                    <h3>@{{ currentProduct.title }}</h3>

                    <div class="modal-content" :class="{ 'lots': currentProduct.products.length > 20 }">
                        <ul>
                            <li v-for="product in currentProduct.products">
                                @{{ product }}
                            </li>
                        </ul>
                    </div>

                    <div class="modal-navigation">
                        <button class="prev" :disabled="currentProductIndex === 0" @click.prevent="prevProductCategory()">{{ __( 'Prev', 'gram' ) }}</button>

                        <button class="next" :disabled="currentProductIndex === (products.length - 1)" @click.prevent="nextProductCategory()">{{ __( 'Next', 'gram' ) }}</button>
                    </div>
                </div>
            </div>
        </div>

    </article>

@endsection





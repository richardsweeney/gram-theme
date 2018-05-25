<section class="newsletter-container">

    <div class="newsletter-inner-container container">

        <div class="feature-home-text">
            {{ $register_text }}
        </div>

        <div class="nl-form">
            @if ( ! empty( $mc_message ) )
                <p class="mc-message">
                    {{ $mc_message }}
                </p>
            @endif

            <form class="form-inline" role="form" action="https://eepurl.com/dtrPZX" method="get" target="_blank">
                <button type="submit" class="btn">{{ $signup_button_text }}</button>
            </form>
        </div>
    </div>

</section>


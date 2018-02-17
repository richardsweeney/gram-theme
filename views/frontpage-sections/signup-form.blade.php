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

            <form class="form-inline" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" name="mailchimp_email" placeholder="{{ $email_placeholder_text }}" class="subscribe-email form-control" id="subscribe-email">
                </div>
                <button type="submit" class="btn">{{ $signup_button_text }}</button>
            </form>
        </div>
    </div>

</section>


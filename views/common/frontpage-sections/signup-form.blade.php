<section class="newsletter">
    <div class="color-overlay"></div>
    <div class="container">

        <div class="newsletter-inner-container">

            <div class="feature-home-text">
                {{ $register_text }}
            </div>

            <div class="nl-form">
                <form class="form-inline" role="form" action="resources/subscribe.php" method="post">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">{{ __( 'Email address', 'gram' ) }}</label>
                        <input type="text" name="email" placeholder="Enter your email..." class="subscribe-email form-control" id="subscribe-email">
                    </div>
                    <button type="submit" class="btn">{{ __( 'Join our mailing list', 'gram' ) }}</button>
                </form>

                <div class="success-message"></div>
                <div class="error-message"></div>
            </div>
        </div>
        <!-- <a href="#video" class="jump-down"><i class="fa fa-chevron-down"></i></a> -->

    </div>
</section>


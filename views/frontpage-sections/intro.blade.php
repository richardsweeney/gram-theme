
<div class="gram-crowdfunding-banner">

    <div class="gram-crowdfunding-banner__image">
        <img src="{{ get_template_directory_uri() }}/resources/img/crowdfunding.png" alt="Gram Crowdfunding Image">
    </div>

    <div class="gram-crowdfunding-banner__text">
        <p class="gcbt-message">Read more about how you can help us and donate</p>

        <p><a target="_blank" href="https://www.indiegogo.com/projects/hjalp-gram-flytta-och-expandera-help-gram-expand-food#/" class="button donate-now">Donate Now</a></p>
    </div>


</div>

{{--

<div id="js-parallax-window" class="parallax-window">

    @while( have_posts() )
        {{ the_post() }}

        <div class="parallax-static-content container">
            <h1>{{ the_title() }}</h1>
            {{ the_content() }}
        </div>

        @if( has_post_thumbnail() )
            <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}') no-repeat center top;"></div>
        @endif

    @endwhile

</div>

--}}

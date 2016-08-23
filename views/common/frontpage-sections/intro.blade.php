<div id="js-parallax-window" class="parallax-window">

  <div class="parallax-static-content">
    <b>
      <h1>{{ bloginfo('name') }}</h1>
      <p>{{ bloginfo('description') }}</p>
    </b>
  </div>

  @if( has_post_thumbnail() )
  <div id="js-parallax-background" class="parallax-background" style="background: url('{{ the_post_thumbnail_url() }}')"></div>
	@endif

  <a href="#section-features" class="jump-down"><i class="fa fa-chevron-down"></i></a>

</div>

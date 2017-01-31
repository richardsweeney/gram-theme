<!DOCTYPE html>
<html {{ language_attributes() }}>
<head>

	<title>{{ wp_title() }}</title>

	<meta charset="{{ bloginfo( 'charset' ) }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	{{ wp_head() }}

	{{ shipyard_maybe_add_ga() }}

</head>

<body {{ body_class() }}>

<div id="page" class="hfeed site">

	<header class="navigation container site-header" role="banner">
		<a href="{{ home_url( '/') }}" class="logo">
			<img class="main-logo" src="{{ get_template_directory_uri() }}/resources/img/gram-text-logo.svg"
				 alt="Gram Malmö Text Logo">
		</a>

		<a href="#" type="button" class="js-menu-trigger sliding-panel-button">
			{{ shipyard_render_svg('bars') }}
		</a>

		<div class="js-menu-screen sliding-panel-fade-screen"></div>

		<nav role="navigation" class="nav-menu js-menu sliding-panel-content">
			<a type="button" href="#" class="nav-menu-toggle">{{ shipyard_render_svg('times') }}</a>
			{{ wp_nav_menu([ 'theme_location' => 'primary' ]) }}
		</nav>
	</header>

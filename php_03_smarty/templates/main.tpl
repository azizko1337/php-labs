<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kalkulator kredytowy">
	<meta name="author"      content="Antoni Załupka z Sergey Pozhilov (GetTemplate.com)">
	
	<title>{$page_title|default:"Kalkulator kredytowy"}</title>

	<link rel="shortcut icon" href="{$app_url}/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$app_url}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$app_url}/css/font-awesome.min.css">

	<link rel="stylesheet" href="{$app_url}/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="{$app_url}/css/main.css">

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{$app_url}"><img src="{$app_url}/images/logo.png" alt="Policz swoj kredyt!"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
						<li class="{if $page=="loan"}active{/if}"><a href="{$app_url}">Kalulator</a></li>
					{if $logged_in}
						<li><a class="btn" href="{$app_url}/app/auth/logout.php">Wyloguj</a></li>
					
					{else}
						<li><a {if $page=="login"}style="color:white"{/if} class="btn" href="{$app_url}/app/auth/login.php">Logowanie</a></li>
					{/if}
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

			{if isset($messages)}
				{if count($messages) > 0} 
					<h4 style="color:red;">Wystąpiły błędy: </h4>
					<ol>
					{foreach  $messages as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
					{/foreach}
					</ol>
				{/if}
			{/if}

			{if isset($infos)}
				{if count($infos) > 0} 
					<h4 style="color:orange">Informacje: </h4>
					<ol class="inf">
					{foreach  $infos as $msg}
					{strip}
						<li>{$msg}</li>
					{/strip}
					{/foreach}
					</ol>
				{/if}
			{/if}

			</aside>
			<!-- /Sidebar -->
		
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				{block name="content"}{/block}
			</article>
			<!-- /Article -->
			
			

		</div>
	</div>	<!-- /container -->

	
	
	<section class="container-full top-space">
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1274.3222463640343!2d19.13357711878862!3d50.29856371118149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716da83f9e846e1%3A0x3ff406cf0f2cb7dd!2sWydzia%C5%82%20Nauk%20%C5%9Acis%C5%82ych%20i%20Technicznych%20Uniwersytet%20%C5%9Al%C4%85ski!5e0!3m2!1spl!2spl!4v1711399838368!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>

	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
					<h3 class="widget-title">Skromny Github autora</h3>
					<div class="widget-body">
						<p class="follow-me-icons clearfix">
							<a target="_blank" href="https://github.com/azizko1337"><i class="fa fa-github fa-2"></i></a>
						</p>	
					</div>
					</div>

					<div class="col-md-3 widget">

					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Czemu ten kalkulator kredytowy?</h3>
						<div class="widget-body">
							<p>Nasz kalkulator kredytowy jest tak łatwy w obsłudze, że nawet dziecko poradziłoby sobie z nim! Wprowadź kwotę kredytu oraz oprocentowanie, a nasz kalkulator natychmiastowo obliczy wysokość Twojej miesięcznej raty. Żadnych skomplikowanych wzorów, żadnych niejasności - tylko klarowne i szybkie wyniki!</p>
							<p>Nasz kalkulator kredytowy umożliwia Ci lepsze planowanie finansowe. Dzięki szybkiemu dostępowi do informacji o wysokości raty możesz świadomie zarządzać swoimi finansami i unikać niepożądanych niespodzianek w budżecie. To narzędzie, które pomoże Ci być zawsze krokiem do przodu!</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{$app_url}/js/headroom.min.js"></script>
	<script src="{$app_url}/js/jQuery.headroom.min.js"></script>
	<script src="{$app_url}/js/template.js"></script>
	
	

</body>
</html>
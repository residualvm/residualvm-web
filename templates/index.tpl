<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<base href="{$baseurl}">
	<style type="text/css">
		{* General CSS rules. *}
		@import url("css/layout.css");
		@import url("css/menu.css");
		{* Page specific, or other extra CSS rules. *}
		{foreach from=$css_files item=filename}
		@import url("css/{$filename}");
		{/foreach}
	</style>
	<!--[if IE 6]>
	<style type="text/css">
		@import url("css/ie6.css");
	</style>
	<![endif]-->
	<link rel="alternate" type="application/atom+xml" title="ResidualVM Atom news feed" href="{$baseurl}feeds/atom/">
	<link rel="alternate" type="application/rss+xml" title="ResidualVM RSS news feed" href="{$baseurl}feeds/rss/">
	<title>ResidualVM :: {$title}</title>
</head>
<body>

	{* Header. *}
	<div id="header">
		<a href="{$baseurl}">
			<img src="images/residual_logo.jpg" width="287" height="118" alt="ResidualVM logo" class="float_left">
		</a>

		<span>
			<img src="images/residual-caption.gif" width="483" height="118">
		</span>
	</div>

	<div id="container">
		{* Menu. *}
		<div id="menu">
			{foreach from=$menus item=menu}
				{include file='menu_group.tpl' menu=$menu}
			{/foreach}
			<div id="menu_banners">
				<a href="http://www.facebook.com/ResidualVM">
					<img src="images/facebook.png" width="88" height="32" alt="Join us on Facebook">
				</a>
				<br>
				<a href="http://www.twitter.com/ResidualVM">
					<img src="images/twitter.png" width="88" height="32" alt="Follow us on Twitter">
				</a>
				<br>
			</div>
		</div>

		{* Content *}
		<div id="content">
			{* Introduction text and screenshot viewer. *}
			{if isset($show_intro) && $show_intro}
				{include file='intro_header.tpl'}
			{/if}

			{* The actual content. *}
			<div class="rbroundbox">
				<div class="rbtop">
					<div>
						<p>
							{include file='shadowed_text.tpl' text=$content_title shadowcolor='#fff' textcolor='#821d06'}
						</p>
					</div>
				</div>
				<div class="rbcontent">
					<div class="rbwrapper">
						{$content}
					</div>
				</div>
				<div class="rbbot"><div><p>&nbsp;</p></div></div>
			</div>
		</div>

		{strip}
		<div id="footer">
			<a href="http://sourceforge.net/projects/residualvm">
				<img src="http://sflogo.sourceforge.net/sflogo.php?group_id=37116&amp;type=13" width="120" height="30" alt="Get ScummVM at SourceForge.net. Fast, secure and Free Open Source software downloads">
			</a>
			<a href="http://validator.w3.org/check/referer">
				<img src="http://www.w3.org/Icons/valid-html401" width="88" height="31" alt="Valid HTML 4.01!">
			</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img src="http://jigsaw.w3.org/css-validator/images/vcss" width="88" height="31" alt="Valid CSS!">
			</a>
		</div>
		{/strip}
		<img src="images/content-right-bottom.gif" alt="bottom-right corner" width="12" height="12" class="float_right tentacle">
	</div>
	<div class="float_clear_left"></div>

	<div id="legal">
		<p>
			LucasArts, Monkey Island, Grim Fandango, and probably lots of other things are registered trademarks of <a href="http://www.lucasarts.com/">LucasArts, Inc.</a>. All other trademarks and registered trademarks are owned by their respective companies. ResidualVM is not affiliated in any way with LucasArts, Inc.
		</p>
	</div>

{foreach from=$js_files item=script}
	<script type="text/javascript" src="javascripts/{$script}"></script>
{/foreach}
{* Google analytics javascript. *}
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">
		_uacct = "UA-29425847-1";
		_udn = "residualvm.org";
		urchinTracker();
	</script>
{* End Google analytics javascript. *}
{* Piwik javascript. *}
<!--
{literal}
	<script type="text/javascript">
	var pkBaseURL = (("https:" == document.location.protocol) ? "https://sourceforge.net/apps/piwik/residualvm/" : "http://sourceforge.net/apps/piwik/residualvm/");
	document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
	</script><script type="text/javascript">
	try {
	var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 3);
	piwikTracker.trackPageView();
	piwikTracker.enableLinkTracking();
	} catch( err ) {}
	</script><noscript><p><img src="http://sourceforge.net/apps/piwik/residualvm/piwik.php?idsite=3" style="border:0" alt=""/></p></noscript>
{/literal}-->
{* End Piwik javascript. *}
</body>
</html>

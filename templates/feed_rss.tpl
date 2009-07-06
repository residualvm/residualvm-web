<?xml version='1.0' encoding='UTF-8' ?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
	<channel>
		<title>Residual news</title>
		<link>http://residual.sourceforge.net/</link>
		<description>Residual is a cross-platform 3D game interpreter.</description>
		<language>en</language>
		{foreach from=$news item=n}
		<item>
			<title>{$n->getTitle()}</title>
			<description><![CDATA[{$n->getContent()}]]></description>
			<pubDate>{$n->getDate()|date_f:'r'}</pubDate>
			{if $n->getAuthor() != ''}
			<author>nospam@scummvm.org ({$n->getAuthor()})</author>
			{/if}
			<guid isPermaLink='true'>{$baseurl}news/archive/#{$n->getDate()|date_f:'Y-m-d'}</guid>
			<link>{$baseurl}news/#{$n->getDate()|date_f:'Y-m-d'}</link>
		</item>
		{/foreach}
	</channel>
</rss>

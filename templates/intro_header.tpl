{* Random screenshot. *}
{assign var='rand_files' value=$random_shot.screenshot->getFiles()}
{assign var='rand_max' value=$rand_files|@count}
{assign var='rand_pos' value=0|rand:$rand_max-1}
{assign var='rand_file' value=$rand_files[$rand_pos]}

{* Introduction header, included from index.tpl *}
<div id="intro_header">
	{* Screenshots. *}
	<div class="sshots">
		<div class="rbtop">
			<div>
				<p>
					{include file='shadowed_text.tpl' text='Screenshots' shadowcolor='#fff' textcolor='#356a02'}
				</p>
			</div>
		</div>
		<div class="rbcontent">
			<a href="screenshots/{$random_shot.category}/{$random_shot.screenshot->getCategory()}/{$rand_pos+1}" id="screenshots_random">
				<img src="{$smarty.const.DIR_SCREENSHOTS}/{$rand_file.filename}.jpg" width="128" height="96" title="Click to view Full Size" alt="Random screenshot">
			</a>
		</div>
		<div class="rbbot">
			<div>
				<p>
					<a href="screenshots/" id="screenshots_prev">&laquo; previous</a>
					<a href="screenshots/" id="screenshots_next">next &raquo;</a>
				</p>
			</div>
		</div>
	</div>

	{* Introduction text. *}
	<div class="rbroundbox intro">
		<div class="rbtop">
			<div>
				<p>
					{include file='shadowed_text.tpl' text='What Is Residual?' shadowcolor='#fff' textcolor='#356a02'}
				</p>
			</div>
		</div>
		<div class="rbcontent">
			<div class="rbwrapper">
				<p>
				Residual is a cross-platform 3D game interpreter which allows you to play LucasArts'
				LUA-based 3D adventures: Grim Fandango and Escape from Monkey Island,
				provided you already have their data files. Residual just replaces
				the executables shipped with the games, allowing you to play them on systems for which they were never designed!
				</p>
				<p>
				You can find a thorough list with details on which games are supported and how well on the
				<a href="compatibility.php">compatibility page</a>. Residual is continually improving, so check back often.
				</p>
				<p>
					Our forum and IRC channel, <a href="irc://irc.freenode.net/residual">#residual on
					irc.freenode.net</a>, are open for comments and suggestions. Please read our
					<a href="faq/">FAQ</a> before posting.
				</p>
			</div>
		</div>
		<div class="rbbot"><div><p>&nbsp;</p></div></div>
	</div>
</div>

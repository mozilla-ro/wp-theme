		<div class="secondary">
			<ul class="socials">
				<li class="facebook"><a href="http://www.facebook.com/MozillaRomania"></a></li>
				<li class="twitter"><a href="https://twitter.com/#!/mozillaro"></a></li>
				<li class="diaspora"><a href="https://diasp.org/u/mozillaromania"></a></li>
				<li class="identica"><a href="http://identi.ca/mozillaromania"></a></li>
				<li class="rss"><a href="http://mozilla.ro/feed/"></a></li>
			</ul>
			<aside class="search">
				<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>"> 
					<input type="text" value="Căutare" name="s" id="s" onblur="if (this.value == '')  {this.value = 'Căutare';}" onfocus="if (this.value == 'Căutare') {this.value = '';}"/>
				</form>
			</aside>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php endif; ?>
		</div><!-- secondary-->
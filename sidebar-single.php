		<div class="secondary">
			<ul class="socials">
				<li class="facebook"><a href="#"></a></li>
				<li class="twitter"><a href="#"></a></li>
				<li class="diaspora"><a href="#"></a></li>
				<li class="identica"><a href="#"></a></li>
				<li class="rss"><a href="#"></a></li>
			</ul>
			<aside class="search">
				<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>"> 
					<input type="text" value="Cautare" name="s" id="s" onblur="if (this.value == '')  {this.value = 'Cautare';}" onfocus="if (this.value == 'Cautare') {this.value = '';}"/>
				</form>
			</aside>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar ( Single Page )') ) : ?>

			<?php endif; ?>
		</div><!-- secondary-->
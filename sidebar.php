			<div class="secondary">
				<aside class="widget search">
					<h3>Cautare</h3>
					<form method="get" id="searchform" action="http://mozilla.ro/"> 
						<input type="text" value="Căutare" name="s" id="s" onblur="if (this.value == '')  {this.value = 'Căutare';}" onfocus="if (this.value == 'Căutare') {this.value = '';}"/>
					</form>
				</aside>
				<aside class="widget subscribe">
					<h3>Subscribe</h3>
					<ul class="socials">
						<li class="fb-icon">
							<a href="https://www.facebook.com/MozillaRomania" target="blank" rel="nofollow"></a>
						</li>
						<li class="tw-icon">
							<a href="https://twitter.com/mozillaro" target="blank" rel="nofollow"></a>
						</li>
						<li class="diaspora-icon">
							<a href="https://diasp.org/u/mozillaromania" target="blank" rel="nofollow"></a>
						</li>
						<li class="identica-icon">
							<a href="http://identi.ca/mozillaromania" target="blank" rel="nofollow"></a>
						</li>
						<li class="rss-icon">
							<a href="http://mozilla.ro/feed/" target="blank" rel="nofollow"></a>
						</li>
					</ul>
				</aside>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

				<?php endif; ?>
			</div>
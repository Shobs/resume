<div id="sidebar" class="">
	<div id="avatar">
		<a href="#">
			{{HTML::image('http://placehold.it/125x125', 'thumbnail', array('width' => 125, 'height' => 125, 'alt' => 'Jean Marcellin'));}}
		</a>
	</div>
	<div class="nav-bar vertical">
	<nav>
		<ul id="navMain">
			<!-- You can change the order of the menu here -->
			<li>{{HTML::link('#education', 'education', array('class' => 'selected', 'id'=>'nav_section1'));}}</li>
			<li>{{HTML::link('#technical', 'technical expertise', array('id'=>'nav_section2'));}}</li>
			<li>{{HTML::link('#skills', 'skills', array('id'=>'nav_section3'));}}</li>
			<li>{{HTML::link('#work', 'work history', array('id'=>'nav_section4'));}}</li>
			<li>{{HTML::link('#gallery', 'sample works', array('id'=>'nav_section5'));}}</li>
			<li>{{HTML::link('#awards', 'awards &amp; accomplishments', array('id'=>'nav_section6'));}}</li>
			<li>{{HTML::link('#', 'contact me', array('data-reveal-id' => 'contact', 'id'=>'nav_section1'));}}</li>
			<!-- end / #navMain -->
		</ul>
	</nav>

	<div id="networkLinks">
		<ul  class="inline-list">
			<li>
				<a href="download?id=doc">
					{{HTML::image('http://placehold.it/16x16', 'thumbnail', array('width' => 16, 'height' => 16, 'alt' => 'Download in a .DOC Format'));}}
				</a>
			</li>
			<li>
				<a href="download?id=pdf">
					{{HTML::image('http://placehold.it/16x16', 'thumbnail', array('width' => 16, 'height' => 16, 'alt' => 'Download in a PDF Format'));}}
				</a>
			</li>
			<li class="divider">
				<a href="#">
					{{HTML::image('http://placehold.it/16x16', 'thumbnail', array('width' => 16, 'height' => 16, 'alt' => 'Print Resume'));}}
				</a>
			</li>
			<li>
				<a href="#">
					{{HTML::image('http://placehold.it/16x16', 'thumbnail', array('width' => 16, 'height' => 16, 'alt' => 'Follow me on LinkedIn'));}}
				</a>
			</li>
			<li>
				<a href="#">
					{{HTML::image('http://placehold.it/16x16', 'thumbnail', array('width' => 16, 'height' => 16, 'alt' => 'Follow me on Twitter'));}}
				</a>
			</li>
			<!-- end / #networkLinks -->
		</ul>
		</div>
	</div>
</div>


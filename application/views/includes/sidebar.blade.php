<div data-magellan-expedition='fixed' id="sidebar" class="">
	<nav class="hide-for-small">
	<div id="avatar">
		<a href="#top">
			{{HTML::image('http://placehold.it/125x125', 'thumbnail', array('width' => 125, 'height' => 125, 'alt' => 'Jean Marcellin'));}}
		</a>
	</div>
	<div class="nav-bar vertical">

		<ul id="navMain">
			<!-- You can change the order of the menu here -->
			<li>{{HTML::link('#education', 'education', array('class' => 'selected', 'data-magellan-arrival'=>'education'));}}</li>
			<li>{{HTML::link('#technical', 'technical expertise', array('data-magellan-arrival'=>'technical'));}}</li>
			<li>{{HTML::link('#work', 'work history', array('data-magellan-arrival'=>'work'));}}</li>
			<li>{{HTML::link('#awards', 'awards &amp; accomplishments', array('data-magellan-arrival'=>'awards'));}}</li>
			<li>{{HTML::link('#', 'contact me', array('data-reveal-id' => 'contact'));}}</li>
			<!-- end / #navMain -->
		</ul>
	</nav>

	<div id="networkLinks" class="hide-for-small">
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
				<a href="#" id="print" class="print-preview">
					{{HTML::image('http://placehold.it/16x16', 'thumbnail', array('width' => 16, 'height' => 16, 'alt' => 'Print Resume'));}}
				</a>
			</li>
			<li>
				<a href="#">
					<i class="foundicon-008"></i>
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


<div data-magellan-expedition='fixed' id="sidebar" class="">
	<nav class="hide-for-small">
	<div id="avatar">
		<a href="#top">
			{{HTML::image('img/JeanMarcellin.jpg', 'thumbnail', array('width' => 125, 'height' => 125, 'alt' => 'Jean Marcellin'));}}
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
				<a href="downloadDoc" class="fs1" aria-hidden="true" data-icon="&#xe002;"></a>
			</li>
			<li>
				<a href="downloadPdf" class="fs1" aria-hidden="true" data-icon="&#xe003;"></a>
			</li>
			<li class="divider">
				<a href="#" id="print" class="print-preview fs1" aria-hidden="true" data-icon="&#xe000;"></a>
			</li>
			<li>
				<a href="#" class="fs1" aria-hidden="true" data-icon="&#xe001;"></a>
			</li>
			<li>
				<a href="#" class="fs1" aria-hidden="true" data-icon="&#xe004;"></a>
			</li>
			<!-- end / #networkLinks -->
		</ul>
		</div>

	</div>

</div>


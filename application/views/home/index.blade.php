@layout('layouts.main')

@section('content')

<div id="headerWrapper" class="hide-for-small">
	<div class="row" >
		<div class="twelve columns" id="header">
			<!-- Header Wrapper section Begins -->
			@include('includes.header')
			<!-- end / #headerWrapper -->
		</div>
	</div>
</div>

<div id="headerWrapperMobile" class="show-for-small">
	<div class="row" >
		<div class="twelve columns" id="headerMobile">
			<!-- Header Wrapper section Begins -->
			@include('includes.header-mobile')
			<!-- end / #headerWrapper -->
		</div>
	</div>
</div>

<div class="row" id="headerShadow">
	<!-- end / #headerShadow -->
</div>

<section role="main"> <!-- Main Section For OffCanvas -->
<div class="row">
	<div class="twelve columns" id="contentWrapper">
		<div class="four columns hide-for-small">
			<!-- Side Bar section Begins -->
			@include('includes.sidebar')
			<!-- end / #sidebar -->
		</div>

		<!-- Content section Begins -->
		<div class="eight columns phone-two" id="content">
			<!-- Education Section Begins -->
			<section id="education">
				@include('includes.education')
				<!-- end #education -->
			</section>

			<!-- Technical Expertise Section Begins -->
			<section id="technical">
				@include('includes.technical')
				<!-- end #technical -->
			</section>

			<!-- Skills Section Begins -->
			<section id="skills">
				@include('includes.skills')
				<!-- end #skills -->
			</section>

			<!-- Work History Section Begins -->
			<section id="work">
				@include('includes.work')
				<!-- end #work -->
			</section>

			<!-- Sample Works Section Begins -->
			<section id="gallery">
				@include('includes.gallery')
				<!-- end .gallery 2 -->
			</section>

			<!-- Awards and Accomplishments Section Begins -->
			<section id="awards">
				@include('includes.awards')
				<!-- end #awards -->
			</section>

			<!-- end #content -->
		</div>
	</div>
	<!-- end #contentWrapper -->
</div>
</section>

<section id="sidebarmobile" role="complementary" class="phone-two"> <!-- This tells the javascript to take this content out of the main page and into the sidebar on small screens -->
	<nav id="sidemenu" role="navigation">
	    <ul id="sideMainNav" class="nav-bar">
	        <li>{{HTML::link('#education', 'education', array('class' => 'selected', 'data-magellan-arrival'=>'education'));}}</li>
			<li>{{HTML::link('#technical', 'technical expertise', array('data-magellan-arrival'=>'technical'));}}</li>
			<li>{{HTML::link('#skills', 'skills', array('data-magellan-arrival'=>'skills'));}}</li>
			<li>{{HTML::link('#work', 'work history', array('data-magellan-arrival'=>'work'));}}</li>
			<li>{{HTML::link('#gallery', 'sample works', array('data-magellan-arrival'=>'gallery'));}}</li>
			<li>{{HTML::link('#awards', 'awards &amp; accomplishments', array('data-magellan-arrival'=>'awards'));}}</li>
	    </ul>
	</nav>
	<div id="contactMobile">
    {{Form::open('contactMe', 'post', array('id'=>'contactMe'));}}
		<!-- Change your email id in the config.php file -->
		<div class="field">
			{{Form::label('name', 'Name *', array('class' => 'label', 'for' => 'name'));}}
			<span>{{$errors->first('name')}}</span>
			{{Form::text('name', Input::old('name'), array('class' => 'text', 'id' => 'name', 'required' => 'sometimes'));}}
		</div>
		<div class="field">
			{{Form::label('email', 'E-mail *', array('class' => 'label', 'for' => 'email'));}}<span>{{$errors->first('email')}}</span>
			{{Form::email('email', Input::old('email'), array('class' => 'text', 'id' => 'email', 'required' => 'sometimes'));}}
		</div>
		<div class="field">
			{{Form::label('message', 'Message *', array('class' => 'label', 'for' => 'message'));}}<span>{{$errors->first('message')}}</span>
			{{Form::textarea('message', Input::old('message'), array('cols' => '25', 'rows' => '3', 'class' => 'textbox', 'id' => 'message', 'required' => 'sometimes'));}}
		</div>
		<p>* Fields are required.</p>
		<div class="buttons">
			{{Form::submit('Submit', array('class' => 'medium button submit', 'id' => 'submit'));}}
			{{Form::reset('Reset', array('class' => 'medium button submit'));}}
		</div>
	{{Form::close();}}
	</div>
</section> <!-- end off-canvas sidebar -->

<footer id="footerBg" class="site-footer row" role="contentinfo">
	<div class="row" id="footer">
		<div class="twelve columns"id="copyright">
			<p>Jean Marcellin. All Rights Reserved.</p>
			<!-- end #copyright -->
		</div>
		<!-- end #footer -->
	</div>
</footer>

<!-- Modal Section Begins -->
@include('includes.modal')
<!-- end #contact -->

@endsection
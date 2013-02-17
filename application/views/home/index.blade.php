@layout('layouts.main')

@section('content')

<header id="headerWrapper" class="hide-for-small">
	<div class="row" >
		<div class="twelve columns" id="header">
			<!-- Header Wrapper section Begins -->
			@include('includes.header')
			<!-- end / #headerWrapper -->
		</div>
	</div>
</header>

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
				<div data-magellan-destination='education' class="section" name="section1">
					@include('includes.education')
					<!-- end #education -->
				</div>
			</section>

			<!-- Technical Expertise Section Begins -->
			<section id="technical">
				<div data-magellan-destination='technical' class="section" name="section2">
					@include('includes.technical')
					<!-- end #technical -->
				</div>
			</section>

			<!-- Skills Section Begins -->
			<section id="skills">
				<div data-magellan-destination='skills' class="section" name="section3">
					@include('includes.skills')
					<!-- end #skills -->
				</div>
			</section>

			<!-- Work History Section Begins -->
			<section id="work">
				<div data-magellan-destination='work' class="section" name="section4">
					@include('includes.work')
					<!-- end #work -->
				</div>
			</section>

			<!-- Sample Works Section Begins -->
			<section id="gallery">
				<div data-magellan-destination='gallery' class="section" name="section5">
					@include('includes.gallery')
					<!-- end .gallery 2 -->
				</div>
			</section>

			<!-- Awards and Accomplishments Section Begins -->
			<section id="awards">
				<div data-magellan-destination='awards' class="section" name="section6">
					@include('includes.awards')
					<!-- end #awards -->
				</div>
			</section>

			<!-- end #content -->
		</div>
	</div>
	<!-- end #contentWrapper -->
</div>
</section>

<footer id="footerBg" class="row hide-for-small">
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

@section('content-mobile')
	<!-- SMALL SCREEN NAVIGATION -->
	<nav id="topMenu" role="navigation"> <!-- THIS IS KEY -->
		<ul id="nav" class="nav-bar">
			<li>{{HTML::link('#educationMobile', 'EDUCATION');}}</li>
			<li>{{HTML::link('#technicalMobile', 'TECHNICAL EXPERTISE');}}</li>
			<li>{{HTML::link('#skillsMobile', 'SKILLS');}}</li>
			<li>{{HTML::link('#workMobile', 'WORK HISTORY');}}</li>
			<li>{{HTML::link('#galleryMobile', 'SAMPLE WORKS');}}</li>
			<li>{{HTML::link('#awardsMobile', 'AWARDS &amp; ACCOMPLISHMENTS');}}</li>
		</ul>
	</nav>
	<div class="first full-width color-three">
		<header id="headerWrapperMobile" class="row">
			<div id="navButtons" class="six columns">
				<p class="show-for-small buttons">
					<a class='menu-button medium button' id="menuButton" href="#menu">Menu</a><!-- link goes to named anchor -->
					<a class='sidebar-button medium button' id="sidebarButton" href="#contact" >Contact Me</a>
				</p> <!-- link goes to named anchor -->
				</div>
			<!-- LOGO -->
			<div class="six columns">
				<span><a href="#" class="logo" id="labelMobile"><img src="images/site_assets/logo.png" />
					<h1>Jean Marcellin</h1>
				</a></span>
			</div>

		</header>
	</div><!-- end full width -->

	<section id="content" role="main"> <!-- Main Section - This Is Part Of The Magic -->

		<!-- CALLOUT TEXT -->
		<div class="full-width color-five">
			<div class="row callout">
				<div class="twelve columns">
					<p>Looking for a challenging position as a web developer, with opportunity for advancement.</p>
				</div><!-- end columns -->
			</div><!-- end row -->
		</div><!-- end full width color five -->

		<!-- SERVICES -->
		<div class="full-width color-two">
			<div class="row">
				<div id="educationMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.education')

				</div>

				<div id="technicalMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.technical')

				</div>

				<div id="skillsMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.skills')

				</div>
				<div id="workMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.work')

				</div>
				<div id="galleryMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.gallery')

				</div>
				<div id="awardsMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.awards')

				</div>

			</div><!-- end row -->
		</div><!-- end full-width -->

	</section> <!-- end of main section -->

	<section id="contactMobile" role="complementary"> <!-- This tells the javascript to take this content out of the main section and into the sidebar on small screens -->

		<!-- CONTACT US -->
		<div class="full-width">
			<div class="row">
				<div class="ten columns centered">
					<h2>Contact</h2>
					<h4>Jean Marcellin / Web Developper</h4>
					<div id="note"></div>
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
							{{Form::submit('Submit', array('class' => 'button submit', 'id' => 'submit'));}}
							{{Form::reset('Reset', array('class' => 'button submit'));}}
						</div>
					{{Form::close();}}
				</div>
			</div> <!-- end row -->
		</div><!-- end full width -->
	</section> <!-- end off canvas sidebar -->

	<!-- FOOTER -->
	<footer id="footerBg" class=" color-four site-footer row">
		<div id="footer" class="twelve columns">
			<p>Jean Marcellin. All Rights Reserved.</p>
		</div>
	</footer>

@endsection
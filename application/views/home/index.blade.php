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

			<!-- Work History Section Begins -->
			<section id="work">
				<div data-magellan-destination='work' class="section" name="section4">
					@include('includes.work')
					<!-- end #work -->
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
	<!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="d" data-role="header" data-position="fixed">
                <a data-role="button" data-theme="b" href="#mobileContact" class="ui-btn-right">
                    Contact
                </a>
                <a id="menuButton" data-role="button" data-theme="b" href="#mobileMenu" class="ui-btn-left">
                    Menu
                </a>
                <h3>
                    Welcome
                </h3>
            </div>
            <div data-role="content">
	            <div id="educationMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.education')

				</div>

				<div id="technicalMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.technical')

				</div>

				<div id="workMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.work')

				</div>

				<div id="awardsMobile" class="four columns service">
					<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
					@include('includes.awards')

				</div>
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h3>
                    www.jeanmarcellin.net
                </h3>
            </div>
        </div>
        <div data-role="page" id="mobileMenu">
        <div data-theme="d" data-role="header" data-position="fixed">
                <a data-role="button" data-theme="b" href="#mobileContact" class="ui-btn-right">
                    Contact
                </a>
                <a id="menuButton" data-role="button" data-theme="b" href="#mobileMenu" class="ui-btn-left">
                    Menu
                </a>
                <h3>
                    Welcome
                </h3>
            </div>
            <div data-role="content">
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                            Professional profile
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#educationMobile" data-transition="slide">
                            Education
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#technicalMobile" data-transition="slide">
                            Technical Skills
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#workMobile" data-transition="slide">
                            Work History
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#awardsMobile" data-transition="slide">
                            Awards and Accomplishments
                        </a>
                    </li>
                </ul>
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h3>
                    www.jeanmarcellin.net
                </h3>
            </div>
        </div>
         <div data-role="page" id="mobileContact">
         <div data-theme="d" data-role="header" data-position="fixed">
                <a data-role="button" data-theme="b" href="#mobileContact" class="ui-btn-right">
                    Contact
                </a>
                <a id="menuButton" data-role="button" data-theme="b" href="#mobileMenu" class="ui-btn-left">
                    Menu
                </a>
                <h3>
                    Welcome
                </h3>
            </div>
            <div data-role="content">
                <form id="contactMobile" action="contactMe" method="POST">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="nameMobile">
                                Name *
                            </label>
                            <input name="name" id="nameMobile" placeholder="" value="" type="text" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="emailMobile">
                                E-Mail *
                            </label>
                            <input name="email" id="emailMobile" placeholder="" value="" type="email" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="messageMobile">
                                Message *
                            </label>
                            <textarea name="message" id="messageMobile" placeholder="" data-mini="true">
                            </textarea>
                        </fieldset>
                    </div>
                    <input id="submit" type="submit" value="Submit" />
                </form>
            </div>
            <div data-theme="d" data-role="footer" data-position="fixed">
                <h3>
                    www.jeanmarcellin.net
                </h3>
            </div>
        </div>

@endsection
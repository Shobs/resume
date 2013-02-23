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

<section> <!-- Main Section For OffCanvas -->
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
					<h2>Education</h2>
					@include('includes.education')
					<!-- end #education -->
				</div>
			</section>

			<!-- Technical Expertise Section Begins -->
			<section id="technical">
				<div data-magellan-destination='technical' class="section" name="section2">
					<h2>Technical Skills</h2>
					@include('includes.technical')
					<!-- end #technical -->
				</div>
			</section>

			<!-- Work History Section Begins -->
			<section id="work">
				<div data-magellan-destination='work' class="section" name="section4">
					<h2>Work History</h2>
					@include('includes.work')
					<!-- end #work -->
				</div>
			</section>

			<!-- Awards and Accomplishments Section Begins -->
			<section id="awards">
				<div data-magellan-destination='awards' class="section" name="section6">
					<h2>Awards and Accomplishments</h2>
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
        <div data-role="page" id="homeMobile">
            <div data-theme="a" data-role="header" data-position="fixed">
                <h3>
                    Welcome
                </h3>
            </div>
            <div id="content" data-role="content" data-theme="a">
            <p id="introQuote">“Looking for a challenging position as a web developer, with opportunity for advancement.”</p>
            	<div data-role="collapsible">
                    <h3>
                        Professional Profile
                    </h3>
	            	<div id="profile" class="four columns service">
						<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
						@include('includes.profile')
					</div>
                </div>
                <div data-role="collapsible">
                    <h3>
                        Education
                    </h3>
					<div id="education" class="four columns service">
						<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
						@include('includes.education')
					</div>
                </div>
                <div data-role="collapsible">
                    <h3>
                        Technical Skills
                    </h3>
					<div id="technical" class="four columns service">
						<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
						@include('includes.technical')
					</div>
                </div>
                <div data-role="collapsible">
                    <h3>
                        Work History
                    </h3>
					<div id="work" class="four columns service">
						<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
						@include('includes.work')
					</div>
                </div>
                <div data-role="collapsible">
                    <h3>
                        Awards and Accomplishments
                    </h3>
					<div id="awards" class="four columns service">
						<!-- data-icon attribute sets the correct icon font. See line #140 style.css -->
						@include('includes.awards')
					</div>
                </div>
                <div data-role="collapsible">
                    <h3>
                        Contact Me
                    </h3>
                     <form id="contactMobile" action="contactMobile" method="GET">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="nameMobile">Name *</label>
                            <input name="nameMobile" id="nameMobile" class="required" minlength="5" type="text" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-mini="true">
                            <label for="emailMobile">E-Mail *</label>
                            <input name="emailMobile" id="emailMobile" class="required" minlength="5" type="email" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="messageMobile">Message *</label>
                            <textarea name="messageMobile" id="messageMobile" class="required" minlength="5" data-mini="true">
                            </textarea>
                        </fieldset>
                    </div>
                    <input id="submit" type="submit" value="Submit" />
                </form>
            </div>
            <div id="footer" data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    www.jeanmarcellin.net
                </h3>
            </div>
        </div>

@endsection
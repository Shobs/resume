@layout('layouts.main')

@section('content')

<div id="headerWrapper">
	<div class="row" >
		<div class="twelve columns" id="header">
			<!-- Header Wrapper section Begins -->
			@include('includes.header')
			<!-- end / #headerWrapper -->
		</div>
	</div>
</div>

<div class="row" id="headerShadow">
	<!-- end / #headerShadow -->
</div>

<div class="row">
	<div class="twelve columns" id="contentWrapper">
		<div class="four columns">
			<!-- Side Bar section Begins -->
			@include('includes.sidebar')
			<!-- end / #sidebar -->
		</div>

		<!-- Content section Begins -->
		<div class="eight columns" id="content">
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

<div id="footerBg">
	<div class="row" id="footer">
		<div class="twelve columns"id="copyright">
			<p>Jean Marcellin. All Rights Reserved.</p>
			<!-- end #copyright -->
		</div>
		<!-- end #footer -->
	</div>
</div>

<!-- Modal Section Begins -->
@include('includes.modal')
<!-- end #contact -->

@endsection
<div id="contact" class="reveal-modal" >
	<h2>Contact</h2>
	<h4>Jean Marcellin / Web Developper</h4>
	<!-- You can even use an image here. The width and height defined in the <a> element determines the width and height of the pop up. The title in the <a> element determines the title shown in the pop-up. -->
	<p>{{HTML::link('maps.html?iframe=true&amp;width=600&amp;height=400', 'View Google Map', array('rel' => 'prettyPhoto'));}}
	</p>
	<div id="note"></div>
	{{Form::open('email', 'post');}}
		<!-- Change your email id in the config.php file -->
		<div class="field">
			{{Form::label('name', 'Name *', array('class' => 'label', 'for' => 'name'));}}
			<span>{{$errors->first('name')}}</span>
			{{Form::input('text','name', Input::old('name'), array('class' => 'text', 'id' => 'name'));}}
		</div>
		<div class="field">
			{{Form::label('email', 'E-mail *', array('class' => 'label', 'for' => 'email'));}}<span>{{$errors->first('email')}}</span>
			{{Form::email('email', Input::old('email'), array('class' => 'text', 'id' => 'email'));}}
		</div>
		<div class="field">
			{{Form::label('message', 'Message *', array('class' => 'label', 'for' => 'message'));}}<span>{{$errors->first('message')}}</span>
			{{Form::textarea('message', Input::old('message'), array('cols' => '25', 'rows' => '3', 'class' => 'textbox', 'id' => 'message'));}}
		</div>
		<p>* Fields are required.</p>
		<div class="buttons">
			{{Form::submit('Submit', array('class' => 'medium button submit'));}}
			{{Form::reset('Reset', array('class' => 'medium button submit'));}}
		</div>
	{{Form::close();}}

	<!-- end #contact -->
	{{HTML::link('#', '&#215;', array('class' => 'close-reveal-modal'));}}
</div>

<!--<div id="message" class="reveal-modal">
	<h4>{{$message}}<h4>
	{{HTML::link('#', '&#215;', array('class' => 'close-reveal-modal'));}}
</div>-->



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jean Marcellin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <!-- if you need normalize.css -->
        {{ HTML::style('css/normalize.min.css') }}

        {{ HTML::style('css/mobileTheme.css', array('media'=> 'only screen and (max-width: 768px)')) }}
        {{ HTML::style('http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile.structure-1.3.0-rc.1.min.css', array('media'=> 'only screen and (max-width: 768px)')) }}
        {{ HTML::style('css/social_foundicons.css', array('media' => 'only screen and (min-width: 768px)')) }}
        {{ HTML::style('css/social_foundicons_ie7.css', array('media' => 'only screen and (min-width: 768px)')) }}
        {{ HTML::style('css/print-preview.css', array('media' => 'only screen and (min-width: 768px)')) }}
        {{ HTML::style('css/app.css', array('media' => 'only screen and (min-width: 768px)')) }}
        {{ HTML::style('css/print.css', array('media' => 'print')) }}

        {{ HTML::script('js/foundation/modernizr.foundation.js') }}

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="stylesheets/ie.css">
        <![endif]-->

        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body id="page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- begin content -->

        <div id="wrapperScreen" class="wrapper">
            @yield('content')
        </div>

        <div id="wrapperMobile" class="wrapper">
            @yield('content-mobile')
        </div>
        <!-- end content -->

        <!-- begin javascript -->

        <!-- Use Googles online jQuery lib -->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
        <!-- Use local jQuery lib -->
        {{HTML::script('http://code.jquery.com/jquery-latest.js');}}

        <script>
            if (Modernizr.mq('only screen and (max-width: 768px)')) {
                Modernizr.load('http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js');
                Modernizr.load('js/jquery.validate.js');
                Modernizr.load('js/mobile.js');
            }else{
                Modernizr.load('js/jquery.print-preview.js')
                Modernizr.load('js/foundation/jquery.foundation.reveal.js');
                Modernizr.load('js/foundation/jquery.placeholder.js');
                Modernizr.load('js/foundation/jquery.foundation.navigation.js');
                Modernizr.load('js/foundation/jquery.foundation.buttons.js');
                Modernizr.load('js/foundation/jquery.foundation.alerts.js');
                Modernizr.load('js/foundation/jquery.foundation.magellan.js');
                Modernizr.load('js/foundation/jquery.foundation.forms.js');
                Modernizr.load('js/foundation/app.js');
                Modernizr.load('js/jquery.scrollTo-1.4.3.1-min.js');
                Modernizr.load('js/happy.js');
                Modernizr.load('js/happy.methods.js');
                Modernizr.load('js/plugins.js');
                Modernizr.load('js/main.js');
            }
        </script>
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script> -->

        {{-- HTML::script('js/foundation/jquery.foundation.tabs.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.reveal.js', array('media'=>'screen')) }}
        {{-- HTML::script('js/foundation/jquery.event.swipe.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.joyride.js') }}
        {{-- HTML::script('js/foundation/jquery.placeholder.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.tooltips.js') }}
        {{-- HTML::script('js/foundation/jquery.cookie.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.clearing.js') }}
        {{-- HTML::script('js/foundation/jquery.event.move.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.topbar.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.accordion.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.navigation.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.mediaQueryToggle.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.buttons.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.orbit.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.alerts.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.magellan.js') }}
        {{-- HTML::script('js/foundation/jquery.foundation.forms.js') }}
        {{-- HTML::script('js/foundation/jquery.offcanvas.js') }}
        {{-- HTML::script('js/foundation/app.js') }}
        {{-- HTML::script('js/waypoints.min.js') }}
        {{-- HTML::script('js/jquery.scrollTo-1.4.3.1-min.js') }}
        {{-- HTML::script('js/happy.js');}}
        {{-- HTML::script('js/happy.methods.js');}}
        {{-- HTML::script('js/jquery.print-preview.js');}}
        {{-- HTML::script('js/plugins.js') }}
        {{-- HTML::script('js/main.js') }}

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <!-- end javascript -->
    </body>
</html>
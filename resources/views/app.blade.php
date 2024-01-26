<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'UTRH') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{ Html::style('css/googleapis.min.css') }} 
		{{ Html::style('css/fontawesome/css/all.min.css') }} 
		
		{{ Html::style('css/bootstrap43.min.css') }} 
		{{ Html::style('css/toastr.min.css') }} 
        {{ Html::style('css/magnific-popup.min.css') }} 
		{{ Html::style('css/new_change.css') }} 
        {{ Html::style('css/jquery-ui.min.css') }} 
        {{ Html::style('css/owl.carousel.min.css')}} 
        {{ Html::style('css/owl.theme.default.min.css') }} 
        {{ Html::style('css/bootstrap-datepicker.min.css') }} 
        {{ Html::style('css/animate.min.css') }} 
		{{ Html::style('css/fl-bigmug-line.min.css') }} 
        {{ Html::style('css/aos.css') }} 
		{{ Html::style('css/style.min.css') }}
		{{ Html::style('css/plataforma.min.css') }}
		{{ Html::style('css/plataforma1.min.css') }}

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
       
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        @env ('local')
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endenv

        
    </body>
        {{ Html::script('js/jquery-3.3.1.min.js') }} 
		{{ Html::script('js/jquery-ui.min.js') }} 	
        {{ Html::script('js/jquery-migrate-3.0.1.min.js') }} 
       
        {{ Html::script('js/popper.min.js') }} 
        {{ Html::script('js/bootstrap.min.js')}} 
        {{ Html::script('js/owl.carousel.min.js') }} 
        {{ Html::script('js/jquery.stellar.min.js') }} 
        {{ Html::script('js/jquery.countdown.min.js') }} 
        {{ Html::script('js/jquery.magnific-popup.min.js')}} 
        {{ Html::script('js/bootstrap-datepicker.min.js') }} 
        {{ Html::script('js/aos.js') }}
        {!! Html::script('js/main.min.js') !!}
		{!! Html::script('./js/app.js') !!}
		{!! Html::script('./js/general.min.js') !!}
		{!! Html::script('./js/jquery.easing.min.js') !!}
</html>

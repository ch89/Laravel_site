<!DOCTYPE html>
<html>
<head>
	<title>App</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body id='bootstrap-overrides'>

	@include('partials.nav')

	@yield('content')

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var coordinates = new google.maps.LatLng(56.663445, 16.356779);

        var styles = [
            {
                stylers: [
                    { saturation: -70 }
                ]
            },
            {
                featureType: 'building',
                elementType: 'labels'
            },
            {
                featureType: 'poi',
                stylers: [
                    { hue: '#0044ff' }
                ]
            }
        ];

        var options = {
            center: coordinates,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            panControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            scrollwheel: false,
            styles: styles
        }

        var container = document.querySelector('.map');
        var map = new google.maps.Map(container, options);

        var marker = new google.maps.Marker({
            position: coordinates,
            map, map,
            icon: 'images/marker.png'
        });

        var info = new google.maps.InfoWindow({
            content: 'Loremsvägen 6A'
        });

        google.maps.event.addListener(marker, 'click', function() {
            info.open(map, marker);
        });

        /*---Scroll---*/

        var win = $(window);
        var root = $('html, body');
        var nav = $('.navbar-collapse');
        var header = $('.navbar-header');
        var a = $("nav ul:first-child a");

        a.on('click', function(e) {
            e.preventDefault();

            if(win.width() < 768) {
                nav.collapse('hide');
            }

            var section = $(this).attr('href');

            root.animate({
                scrollTop: $(section).offset().top - header.outerHeight()
            }, 800);

            console.log(header.outerHeight());
        });

    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#007bff">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rasmus Bundsgaard</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119184928-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        @if(!isset($experiments))
            gtag('config', config('services.ga.uaid'), { 'optimize_id': config('services.ga.optimize_id')});
        @endif

        @isset($experiments)
            @php(
                $filteredExperiments = array_map(function($x) {
                    return [
                        'id' => $x['id'],
                        'variant' => $x['variant']
                    ];
                }, $experiments)
            )

            gtag('config', config('services.ga.uaid'), {experiments: @json($filteredExperiments)});
        @endisset
    </script>
    <script type="text/javascript">
        base_url = '{{ URL::to('/') }}';
    </script>
</head>
<body>
    <div id="app">
        <div id="sidebar">
            <div id="logo">
                <a href="{{ route('start') }}">
                    {{-- <i class="fal fa-paper-plane fa-3x"></i> --}}
                    {{-- <i class="fal fa-rupee-sign fa-3x"></i> --}}
                    <img class="img-fluid" src="{{ asset('assets/images/logo-rb.png') }}" alt="">
                </a>
            </div>
            <div id="menu">
                <input id="sidebar-checkbox-toggle" type="checkbox">
                <label class="menu-toggle" for="sidebar-checkbox-toggle">
                    <span class="burger"></span>
                </label>
            </div>

            <div id="sidebar-contact">
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:inbound', 'event_label': 'Mail' })" href="mailto:rasmus@it-lease.dk">
                    <i class="fal fa-envelope"></i>
                </a>
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:inbound', 'event_label': 'Phone' })" href="tel:+4531755650">
                    <i class="fal fa-phone"></i>
                </a>
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:outbound', 'event_label': 'Facebook' })" href="https://www.facebook.com/RBundsgaard" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:outbound', 'event_label': 'Github' })" href="https://github.com/rasmus0201" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:outbound', 'event_label': 'LinkedIn' })" href="https://www.linkedin.com/in/rasmus-bundsgaard/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

        <div id="menu-content" class="menu-content">
            <ul class="menu">
                <li class="menu-item active">
                    <a class="menu-link" href="#home">
                        <span class="menu-title">
                            <i class="fas fa-home"></i>
                            Hjem
                        </span>
                        <span class="menu-subtitle">Gå til forsiden</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="#info">
                        <span class="menu-title">
                            <i class="fas fa-info-square"></i>
                            Lidt om mig
                        </span>
                        <span class="menu-subtitle">Vil du vide mere om mig?</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="#portfolio">
                        <span class="menu-title">
                            <i class="fas fa-quote-left"></i>
                            Referencer
                        </span>
                        <span class="menu-subtitle">Se forrige jobs og udtalelser</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="#skillset">
                        <span class="menu-title">
                            <i class="fas fa-code"></i>
                            Kompetencer
                        </span>
                        <span class="menu-subtitle">Hop til erfaringer</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="#contact">
                        <span class="menu-title">
                            <i class="fas fa-envelope"></i>
                            Kontakt
                        </span>
                        <span class="menu-subtitle">Jeg er online 24/7 (næsten)</span>
                    </a>
                </li>
            </ul>
        </div>

        <div id="content">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('scripts')

    <script type="text/javascript">
        $('a').on('click', function(e){
            var attr = $(this).attr('onclick');

            // For some browsers, `attr` is undefined; for others,
            // `attr` is false.  Check for both.
            if (typeof attr !== typeof undefined && attr !== false) {
                return;
            }

            if (this.href.includes(base_url) && this.href.includes('#')) {
                handleInboundLinkClicks(e);
            } else {
                handleOutboundLinkClicks(e);
            }
        });

        function handleInboundLinkClicks(event) {
            ga('send', 'event', {
                eventCategory: 'Inbound Link',
                eventAction: 'click',
                eventLabel: event.target.href,
                transport: 'beacon'
            });
        }

        function handleOutboundLinkClicks(event) {
            ga('send', 'event', {
                eventCategory: 'Outbound Link',
                eventAction: 'click',
                eventLabel: event.target.href,
                transport: 'beacon'
            });
        }
    </script>
</body>
</html>

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

    <title>Rasmus Bundsgaard - Portfolio & Resumé Website</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119184928-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        @if(!isset($experiments) && config('services.ga.optimize_id'))
            gtag('config', '{{ config('services.ga.uaid') }}', { 'optimize_id': '{{ config('services.ga.optimize_id') }}'});
        @elseif (!isset($experiments))
            gtag('config', '{{ config('services.ga.uaid') }}');
        @endif

        @isset($experiments)
            @php
                $filteredExperiments = array_map(function($x) {
                    return [
                        'id' => $x['id'],
                        'variant' => $x['variant']
                    ];
                }, $experiments);
            @endphp

            gtag('config', '{{ config('services.ga.uaid') }}', {experiments: @json($filteredExperiments)});
        @endisset
    </script>
    <script type="text/javascript">
        @php
            $bornDate = DateTime::createFromFormat('d-m-Y', '02-01-2000');
            $startProgramming = DateTime::createFromFormat('d-m-Y', '01-01-2014');
            $now = new DateTime();

            $diff = $bornDate->diff($now);
            $yop = $startProgramming->diff($now);
        @endphp
        window.Bundsgaard = {
            url: '{{ URL::to('/') }}',
            logo: '{{ asset('assets/images/logo-rb.png') }}',
            age: {{ $diff->format('%y') }},
            yop: {{ $yop->format('%y') }},
            firstName: 'Rasmus',
            middleName: 'Bundsgaard',
            lastName: 'Sørensen',
            social: {
                mail: 'bundsgaard.rasmus@gmail.com',
                github: 'https://github.com/rasmus0201',
                linkedin: 'https://www.linkedin.com/in/rasmus-bundsgaard/',
                facebook: 'https://www.facebook.com/RBundsgaard',
            },
            references: [
                {
                    url: '{{ asset('assets/images/case-pp.jpg') }}',
                    title: 'Poul Pava',
                    subtitle: 'Diverse rettelser, overlay masonry',
                },
                {
                    url: '{{ asset('assets/images/case-ju.png') }}',
                    title: 'Justdeal.dk',
                    subtitle: 'Optimeringer. Rettelser på bl.a. admin-, partner- og medarbejder panel. Responsiv',
                },
                {
                    url: '{{ asset('assets/images/case-mv.png') }}',
                    title: 'Maschavangshop.dk',
                    subtitle: 'Rettelser, filtrering af kategorier, responsiv',
                },
                {
                    url: '{{ asset('assets/images/case-sw.png') }}',
                    title: 'Slikworld.dk',
                    subtitle: `Webshop, mulighed for opretning af abonnementer, skræddersyet modul til Coolrunner.dk
                    <a href="https://github.com/rasmus0201/woocommerce-coolrunner" target="_blank" class="link github">
                        <i class="fab fa-github"></i>
                        Se Coolrunner integrationen på GitHub
                    </a>`,
                },
                {
                    url: '{{ asset('assets/images/case-le.png') }}',
                    title: 'Turneringsalgoritme på leagues.gg',
                    subtitle: `Udvikling af både single elimination og double elimination turneringer. Kan ses på
                    <a href="https://leagues.gg/tournaments/lol" target="_blank" class="link">Klik > Active tournaments > Brackets</a>`,
                },
                {
                    url: '{{ asset('assets/images/case-pk.jpg') }}',
                    title: 'Peugeotkvaern.dk',
                    subtitle: 'Responsiv, rettelser, menu, optimering',
                },
                {
                    url: '{{ asset('assets/images/theme-memoo.png') }}',
                    title: 'Memoo.dk',
                    subtitle: `Udvikling af tema fra bunden. Bruges til deres kunder.
                    <a href="https://github.com/rasmus0201/theme-memoo" target="_blank" class="link github">
                        <i class="fab fa-github"></i>
                        Se temaet på GitHub
                    </a>`,
                },
                {
                    url: '{{ asset('assets/images/case-op.jpg') }}',
                    title: 'Opskrifter.dk',
                    subtitle: `Diverse rettelser og optimering.
                    <a href="https://opskrifter.dk/" target="_blank" class="link">Se siden</a>`,
                },
                {
                    url: '{{ asset('assets/images/case-ap.png') }}',
                    title: 'Ap-pe.dk',
                    subtitle: `Dynamisk og interaktiv prisberegner. Rettelser til øvrige dele af siden.
                    <a href="https://github.com/rasmus0201/wp-calculator" target="_blank" class="link github">
                        <i class="fab fa-github"></i>
                        Se plugin på GitHub
                    </a>`,
                },
            ],
            recommendations: [
                {
                    name: 'Memoo.dk',
                    url: '{{ asset('documents/anbefaling-memoo.dk.pdf') }}'
                }
            ],
            date: {
                year: '{{ date('Y') }}'
            }
        }
    </script>
</head>
<body>
    <div id="app" class="v-hide">
        <bundsgaard-sidebar></bundsgaard-sidebar>
        <bundsgaard-navigation></bundsgaard-navigation>

        <bundsgaard-content>
            @yield('content')
        </bundsgaard-content>
    </div>

    <script src="{{ mix('assets/js/app.js') }}"></script>
</body>
</html>

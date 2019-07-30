@extends('layouts.portfolio')

@section('content')

<section id="home" class="section full-height">
    <div id="particles-js"></div>
    <div id="particles-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center white">
                <h1 class="display-3 text-uppercase">Rasmus Bundsgaard</h1>
                <h4>Mit online portfolio og CV</h4>
                <p>Her finder du tidligere opgaver, erfaringer, uddannelse og oplysninger om mig.</p>
            </div>
        </div>
    </div>
</section>

<section id="info" class="section full-height">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-uppercase">
                <h1 class="display-3 mb-3">Lidt om mig</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <p class="font-weight-bold">
                    Om mig
                </p>
                <p>
                    Jeg hedder Rasmus, er <?php echo  (date('Y') - 2000); ?> år gammel og så er jeg tosset med programmering. Til daglig går jeg på Odense Erhvervsskole, som Datatekniker studerende - med speciale i programmering. Hvis jeg ikke er på skolen er jeg på Ordbogen A/S hvor jeg er ansat som datatekniker elev.
                    Udover det bor jeg sammen med min kæreste i Odense, hvor vi hygger meget med de daglige "pligter". Jeg kan desuden også godt lide at cykle, løbe og træne i fitnesscenter.
                </p>
                <p>
                    Jeg er en stille og rolig type. Jeg har også haft egen virksomhed i 3 år sammen med min storebror, hvor vi har drevet en webshop - <a href="https://slikworld.dk" target="_blank" class="btn-link">Slikworld.dk</a>. Vi startede webshoppen i 2015 og valgte at sælge den i 2018, grundet manglende tid og interesse.
                    I virksomheden har jeg stået for hjemmesiden, integrationer, regnskab og bogføring.
                </p>
                <p>
                    Jeg vil karakterisere mig selv som ansvarsfuld, selvstændig og moden.
                </p>
            </div>
            <div class="col-md-6 mb-5">
                <p class="font-weight-bold">
                    Programmeringen - fra start til slut
                </p>
                <p>
                    I slutningen af 2012 besluttede min bror og jeg os for at lave en webshop. Da det var rigtig populært at sælge iPhone covers, kabler og høretelefoner, besluttede vi os også for at gøre det. Vi fandt hurtig en leverandør i Danmark som vi kunne købe et lille parti varer af. Herefter fandt vi Shopify, som var et system til at have en webshop, uden den store brug for at kunne kode.
                    Det var helt perfekt, men vi var dog ikke tilfredse med en engelsk-sproget webshop, og det blev derfor mig der skulle finde ud af hvordan man oversatte det.
                </p>
                <p>
                    Fra det øjeblik af, blev jeg mere og mere interesseret i programmering og startede med at lære HTML og CSS. Efter det ville jeg gerne kunne lave noget dynamisk, brugerregistrering osv. Jeg fandt derfor nogle tutorials på Youtube om hvordan man skulle.
                </p>
                <p>
                    Siden da har jeg lavet utallige små projekter, enten hvor jeg har fulgt med på en tutorial, en anden idé min bror og jeg har haft, eller noget jeg selv ville prøve. Jeg har også været i gang med at lære Laravel, som jeg synes er et super framework, samt Wordpress CMS. Jeg har også lært Bootstrap og andre CSS frameworks.
                </p>
                <p>
                    Udover PHP har jeg også været i gang med Swift (iOS), Java - (Android Studio), Python, C++ (Arduino), C# & Vue.js
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <p class="text-center font-weight-bold">
                    Jobs &amp; Uddannelse
                </p>
            </div>
            <div class="col-md-12 col-lg-6 p-0 pr-4">
                <div class="timeline experience left">
                    <div class="exp-holder">
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Ordbogen A/S</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Aug 2018 - Nu
                                </h6>
                            </div>
                            <p>Ansat som elev i udviklingsafdelingen.</p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Vestjysk Marketing A/S</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Nov 2017 - Mar 2018
                                </h6>
                            </div>
                            <p>Ansat som webudvikler, med et par timer i ugen.</p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Praktik - Vestjysk Marketing A/S</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    2017 - Uge 41
                                </h6>
                            </div>
                            <p>1 uges praktik, hvor jeg fik lov at arbejde med nogle af deres store kunder.</p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Memoo.dk</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Dec 2015 - Nu
                                </h6>
                            </div>
                            <p>Freelance som webudvikler, med 8-10 timer i ugen.</p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Slikworld.dk / Jellybeans.dk</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Jun 2015 - Maj 2018
                                </h6>
                            </div>
                            <p>Egen virksomhed sammen med min storebror Emil. Over 5000 sendte ordrer.</p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Holsted slagtehus</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Jan 2015 - Jun 2016
                                </h6>
                            </div>
                            <p>Hårdt arbejdende vaskedreng i det lokale slagteri.</p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Medius - Holsted idrætscenter.</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Aug 2013 - Mar 2015
                                </h6>
                            </div>
                            <p>Kantine, rengøring og hal-arbejde.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 p-0 pl-4">
                <div class="timeline education">
                    <div class="exp-holder">
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Syddansk Erhvervsskole - Odense</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Aug 2018 - Nu
                                </h6>
                            </div>
                            <p>
                                Begyndte hovedforløb som EUX Datatekniker med speciale i programmering.
                            </p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Skjern Tekniske Skole</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Aug 2017 - Jun 2018
                                </h6>
                            </div>
                            <p>
                                Teknisk skole i Skjern, hvor jeg havde hovedretning EUX SVI. Jeg afslutter grundforløbet sommer 2018.
                            </p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Nordborg Slots Efterskole</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Aug 2016 - Jun 2017
                                </h6>
                            </div>
                            <p>
                                Efterskole på Als i Sønderjylland med "Science" som linjefag.
                            </p>
                        </div>
                        <div class="exp">
                            <div class="hgroup">
                                <h4>Folkeskole</h4>
                                <h6>
                                    <i class="far fa-calendar"></i>
                                    Afsluttet Jun 2016
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="section full-height">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-uppercase">
                <h1 class="display-3 mb-3">Referencer</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 reference" >
                <span class="img" style="background-image: url({{ asset('assets/images/case-pp.jpg') }});"></span>
                <span class="text">
                    <span class="title">Poul Pava</span>
                    <span class="subtitle">
                        Diverse rettelser, overlay masonry
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-ju.png') }});"></span>
                <span class="text">
                    <span class="title">Justdeal.dk</span>
                    <span class="subtitle">
                        Optimeringer. Rettelser på bl.a. admin-, partner- og medarbejder panel. Responsiv
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-mv.png') }});"></span>
                <span class="text">
                    <span class="title">Maschavangshop.dk</span>
                    <span class="subtitle">
                        Rettelser, filtrering af kategorier, responsiv
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-sw.png') }});"></span>
                <span class="text">
                    <span class="title">Slikworld.dk</span>
                    <span class="subtitle">
                        Webshop, mulighed for opretning af abonnementer, skræddersyet modul til Coolrunner.dk
                        <a href="https://github.com/rasmus0201/woocommerce-coolrunner" target="_blank" class="link github">
                            <i class="fab fa-github"></i>
                            Se Coolrunner integrationen på GitHub
                        </a>
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-fk.png') }});"></span>
                <span class="text">
                    <span class="title">Fridakristensen.dk</span>
                    <span class="subtitle">
                        Hjemmeside m. integreret bookingsystem fra Admind.dk
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-pk.jpg') }});"></span>
                <span class="text">
                    <span class="title">Peugeotkvaern.dk</span>
                    <span class="subtitle">
                        Responsiv, rettelser, menu, optimering
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/theme-memoo.png') }});"></span>
                <span class="text">
                    <span class="title">Memoo.dk</span>
                    <span class="subtitle">
                        Udvikling af tema fra bunden. Bruges til deres kunder.
                        <a href="https://github.com/rasmus0201/theme-memoo" target="_blank" class="link github">
                            <i class="fab fa-github"></i>
                            Se temaet på GitHub
                        </a>
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-op.jpg') }});"></span>
                <span class="text">
                    <span class="title">Opskrifter.dk</span>
                    <span class="subtitle">
                        Diverse rettelser og optimering.
                        <a href="https://memoo.opskrifter.dk/" target="_blank" class="link">Se test-site</a>
                    </span>
                </span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 reference">
                <span class="img" style="background-image: url({{ asset('assets/images/case-ap.png') }});"></span>
                <span class="text">
                    <span class="title">Ap-pe.dk</span>
                    <span class="subtitle">
                        Dynamisk og interaktiv prisberegner. Rettelser til øvrige dele af siden.
                        <a href="https://github.com/rasmus0201/wp-calculator" target="_blank" class="link github">
                            <i class="fab fa-github"></i>
                            Se plugin på GitHub
                        </a>
                    </span>

                </span>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ asset('documents/anbefaling-memoo.dk.pdf') }}" target="_blank" class="btn btn-primary btn-block py-3">Se anbefaling fra Memoo.dk</a>
            </div>
        </div>
    </div>
</section>

<section id="skillset" class="section full-height">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-uppercase">
                <h1 class="display-3 mb-3">Kompetencer</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-1 d-flex justify-content-center align-items-center">
                <span class="skillset-type">Design</span>
            </div>
            <div class="col-md-6">
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                        HTML5
                    </div>
                </div>
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        CSS3/4
                    </div>
                </div>
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        Bootstrap 3/4
                    </div>
                </div>
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        Photoshop CC
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                Jeg har arbejdet med HTML/CSS mere end <?php echo  (date('Y') - 2014); ?> år, og jeg har holdt mig up-to-date med de nyeste tags og CSS-regler. Jeg er dog ikke en UI/UX Designer / Grafiker, og er meget mere interesseret i at arbejde i det bagvedliggende kode. Det er dermed ikke sagt jeg ikke kan, men det er bare ikke en spidskompetence, jeg kan også sagtens følge en skitse/ et design ned til mindste detalje. Jeg har også arbejdet lidt Adobe programmerne, samt noget 3D-modellering.
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-1 d-flex justify-content-center align-items-center">
                <span class="skillset-type">Backend</span>
            </div>
            <div class="col-md-6">
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        PHP 5/7
                    </div>
                </div>
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        Laravel 4/5
                    </div>
                </div>
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <span class="d-none d-xl-block">Wordpress. Opsætning, Tema og Plugin-udvikling.</span>
                        <span class="d-xl-none">Wordpress</span>
                    </div>
                </div>
                <div class="progress progress-md mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="30">
                        Linux
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                Jeg arbejder bedst i PHP med Laravel som Framework eller Wordpress CMS. Jeg har også arbejdet med versionsstyring (Git). Jeg synes det er sjovt at lære nye teknologier, og vil gerne lære at lave Apps, eller Desktop Software. Jeg har programmeret i PHP siden slutning af 2013.
                <br><br>
                Jeg har også god erfaring med Linux. Denne side er hostet på VPS hos Digital Ocean med Ubuntu Server.
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section full-height">

    <div class="wrap">
        <h3 class="display-3 text-uppercase white">
            Kontakt mig
        </h3>
        <p class="cta-subtitle white">Jeg er online 24/7 (næsten).</p>

        <div class="row mt-5">
            <div class="contact-btn col-lg-3 col-md-6 col-sm-12">
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:inbound', 'event_label': 'Mail' })" class="btn btn-primary btn-rounded px-4" href="mailto:rasmus@it-lease.dk">
                    <i class="fal fa-envelope"></i>
                    rasmus@it-lease.dk
                </a>
            </div>
            <div class="contact-btn col-lg-3 col-md-6 col-sm-12">
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:inbound', 'event_label': 'Phone' })" class="btn btn-primary btn-rounded px-4" href="tel:+4531755650">
                    <i class="fal fa-phone"></i>
                    31 75 56 50
                </a>
            </div>
            <div class="contact-btn col-lg-3 col-md-6 col-sm-12">
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:outbound', 'event_label': 'Facebook' })" class="btn btn-primary btn-rounded px-4" href="https://www.facebook.com/RBundsgaard" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    Rasmus Bundsgaard
                </a>
            </div>
            <div class="contact-btn col-lg-3 col-md-6 col-sm-12">
                <a onclick="gtag('event', 'click', { 'event_category': 'contact:outbound', 'event_label': 'LinkedIn' })" class="btn btn-primary btn-rounded px-4" href="https://www.linkedin.com/in/rasmus-bundsgaard/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                    Rasmus Bundsgaard
                </a>
            </div>
        </div>
    </div>

    <p class="footer-text">
        &copy; {{ date('Y') }} | Designed and coded with <i class="fa fa-heart fa-primary"></i> by Bundsgaard
    </p>

</section>
@endsection

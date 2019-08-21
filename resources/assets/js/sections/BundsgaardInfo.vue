<template>
    <section class="section full-height">
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
                        Jeg hedder Rasmus, er {{ Bundsgaard.age }} år gammel og så er jeg tosset med programmering. Til daglig går jeg på Odense Erhvervsskole, som Datatekniker studerende - med speciale i programmering. Hvis jeg ikke er på skolen er jeg på Ordbogen A/S hvor jeg er ansat som datatekniker elev.
                        Udover det bor jeg sammen med min kæreste i Odense, hvor vi hygger meget med de daglige "pligter". Jeg kan desuden også godt lide at cykle, løbe og træne i fitnesscenter.
                    </p>
                    <p>
                        Jeg er en stille og rolig type. Jeg har også haft egen virksomhed i 3 år sammen med min storebror, hvor vi har drevet en webshop - <b-button tag="a" v-gclick="'Outbound Link'" :btn="false" color="link" href="https://slikworld.dk" target="_blank">Slikworld.dk</b-button>. Vi startede webshoppen i 2015 og valgte at sælge den i 2018, grundet manglende tid og interesse.
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
                        Udover PHP har jeg også været i gang med Swift (iOS), Java - (Android Studio), Python, C++ (Arduino), C# og bash-scripting.
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
</template>
<script>
    export default {}
</script>

<template>
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center text-uppercase">
          <h1 class="display-3 mb-3">Lidt om mig</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-5">
          <p class="fw-bold">Om mig</p>
          <div>
            <p>
              Jeg hedder Rasmus, er {{ Bundsgaard.age }} år gammel og så er jeg
              tosset med programmering. Til daglig går jeg på Odense
              Erhvervsskole, som Datatekniker studerende - med speciale i
              programmering. Hvis jeg ikke er på skolen er jeg på Ordbogen A/S
              hvor jeg er ansat som datatekniker elev. Udover det bor jeg sammen
              med min kæreste i Odense, hvor vi hygger meget med de daglige
              "pligter". Jeg kan desuden også godt lide at cykle, løbe og træne
              i fitnesscenter.
            </p>
            <p>
              Jeg er en stille og rolig type. Jeg har også haft egen virksomhed
              i 3 år sammen med min storebror, hvor vi har drevet en webshop -
              <a class="btn-link" href="https://slikworld.dk" target="_blank"
                >Slikworld.dk</a
              >. Vi startede webshoppen i 2015 og valgte at sælge den i 2018,
              grundet manglende tid og interesse. I virksomheden har jeg stået
              for hjemmesiden, integrationer, regnskab og bogføring.
            </p>
            <p>
              Jeg vil karakterisere mig selv som ansvarsfuld, selvstændig og
              moden.
            </p>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <p class="fw-bold">Programmeringen - fra start til slut</p>
          <div>
            <p>
              I slutningen af 2012 besluttede min bror og jeg os for at lave en
              webshop. Da det var rigtig populært at sælge iPhone covers, kabler
              og høretelefoner, besluttede vi os også for at gøre det. Vi fandt
              hurtig en leverandør i Danmark som vi kunne købe et lille parti
              varer af. Herefter fandt vi Shopify, som var et system til at have
              en webshop, uden den store brug for at kunne kode. Det var helt
              perfekt, men vi var dog ikke tilfredse med en engelsk-sproget
              webshop, og det blev derfor mig der skulle finde ud af hvordan man
              oversatte det.
            </p>
            <p>
              Fra det øjeblik af, blev jeg mere og mere interesseret i
              programmering og startede med at lære HTML og CSS. Efter det ville
              jeg gerne kunne lave noget dynamisk, brugerregistrering osv. Jeg
              fandt derfor nogle tutorials på Youtube om hvordan man skulle.
            </p>
            <p>
              Siden da har jeg lavet utallige små projekter, enten hvor jeg har
              fulgt med på en tutorial, en anden idé min bror og jeg har haft,
              eller noget jeg selv ville prøve. Jeg har også været i gang med at
              lære Laravel, som jeg synes er et super framework, samt Wordpress
              CMS. Jeg har også lært Bootstrap og andre CSS frameworks.
            </p>
            <p>
              Udover PHP har jeg også været i gang med Swift (iOS), Java -
              (Android Studio), Python, C++ (Arduino), C# og bash-scripting.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-5">
          <p class="text-center fw-bold">Jobs & Uddannelse</p>
        </div>
        <div class="col-md-12 col-lg-6 ps-0 pe-4">
          <div class="timeline employment left">
            <div class="exp-holder">
              <div
                v-for="(item, index) in cv.employment"
                :key="item.title + '-' + index"
                class="exp"
              >
                <div class="hgroup">
                  <h4>{{ item.title }}</h4>
                  <h6>
                    <i class="far fa-calendar"></i>
                    {{ item.date }}
                  </h6>
                </div>
                <p v-if="item.description">
                  {{ item.description }}
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 pe-0 ps-4">
          <div class="timeline education">
            <div class="exp-holder">
              <div
                v-for="(item, index) in cv.education"
                :key="item.title + '-' + index"
                class="exp"
              >
                <div class="hgroup">
                  <h4>{{ item.title }}</h4>
                  <h6>
                    <i class="far fa-calendar"></i>
                    {{ item.date }}
                  </h6>
                </div>
                <p v-if="item.description">
                  {{ item.description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup lang="ts">
import { reactive } from "vue";

import { BundsgaardSiteData as Bundsgaard } from "@/data";

const cv = reactive({
  employment: [
    {
      title: "Ordbogen A/S",
      date: "Aug 2018 - Nu",
      description: "Ansat som elev i udviklingsafdelingen."
    },
    {
      title: "Bo-we.dk",
      date: "Jun 2019 - Nu",
      description:
        "Freelance som remote webudvikler. Opgaver i Laravel & Wordpress."
    },
    {
      title: "Vestjysk Marketing A/S",
      date: "Nov 2017 - Mar 2018",
      description: "Ansat som webudvikler, med et par timer i ugen."
    },
    {
      title: "Praktik - Vestjysk Marketing A/S",
      date: "2017 - Uge 41",
      description:
        "1 uges praktik, hvor jeg bla. fik lov til at arbejde med nogle af deres store kunder."
    },
    {
      title: "Memoo.dk",
      date: "Dec 2015 - Nov 2018",
      description:
        "Freelance som webudvikler, med varierende opgaver primært i Wordpress."
    },
    {
      title: "Slikworld.dk / Jellybeans.dk",
      date: "Jun 2015 - Maj 2018",
      description:
        "Egen virksomhed sammen med min storebror Emil. Over 5000 afsendte ordrer."
    }
  ],
  education: [
    {
      title: "Syddansk Erhvervsskole - Odense",
      date: "Aug 2018 - Nu",
      description:
        "Begyndte hovedforløb som EUX Datatekniker med speciale i programmering."
    },
    {
      title: "Skjern Tekniske Skole",
      date: "Aug 2017 - Jun 2018",
      description:
        "Teknisk skole i Skjern, hvor jeg havde hovedretning EUX SVI. Jeg afslutter grundforløbet sommer 2018."
    },
    {
      title: "Nordborg Slots Efterskole",
      date: "Aug 2016 - Jun 2017",
      description:
        'Efterskole på Als i Sønderjylland med "Science" som linjefag.'
    },
    {
      title: "Folkeskole",
      date: "Afsluttet Jun 2016",
      description: ""
    }
  ]
});
</script>

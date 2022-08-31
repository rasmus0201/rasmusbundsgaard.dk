import { differenceInYears, format } from "date-fns";

import caseAp from "@/assets/cases/ap.png";
import caseJd from "@/assets/cases/jd.png";
import caseLe from "@/assets/cases/le.png";
import caseMe from "@/assets/cases/me.png";
import caseMv from "@/assets/cases/mv.png";
import caseOp from "@/assets/cases/op.jpg";
import casePk from "@/assets/cases/pk.jpg";
import casePp from "@/assets/cases/pp.jpg";
import caseSw from "@/assets/cases/sw.png";
import recommendationMemoo from "@/assets/documents/anbefaling-memoo.dk.pdf";
import logoUrl from "@/assets/logo-rb.png";

const bornDate = new Date(2000, 0, 2);
const startedProgrammingDate = new Date(2014, 0, 1);
const now = new Date();

export const BundsgaardSiteData = {
  url: window.location.origin,
  logo: logoUrl,
  age: differenceInYears(now, bornDate),
  yop: differenceInYears(now, startedProgrammingDate),
  firstName: "Rasmus",
  middleName: "Bundsgaard",
  lastName: "Sørensen",
  social: {
    mail: "bundsgaard.rasmus@gmail.com",
    github: "https://github.com/rasmus0201",
    linkedin: "https://www.linkedin.com/in/rasmus-bundsgaard/",
    facebook: "https://www.facebook.com/RBundsgaard"
  },
  references: [
    {
      url: casePp,
      title: "Poul Pava",
      subtitle: "Diverse rettelser, overlay masonry"
    },
    {
      url: caseJd,
      title: "Justdeal.dk",
      subtitle:
        "Optimeringer. Rettelser på bl.a. admin-, partner- og medarbejder panel. Responsiv"
    },
    {
      url: caseMv,
      title: "Maschavangshop.dk",
      subtitle: "Rettelser, filtrering af kategorier, responsiv"
    },
    {
      url: caseSw,
      title: "Slikworld.dk",
      subtitle: `Webshop, mulighed for opretning af abonnementer, skræddersyet modul til Coolrunner.dk
            <a href="https://github.com/rasmus0201/woocommerce-coolrunner" target="_blank" class="link github">
                <i class="fab fa-github"></i>
                Se Coolrunner integrationen på GitHub
            </a>`
    },
    {
      url: caseLe,
      title: "Turneringsalgoritme på leagues.gg",
      subtitle: `Udvikling af både single elimination og double elimination turneringer. Kan ses på
            <a href="https://leagues.gg/tournaments/lol" target="_blank" class="link">Klik > Active tournaments > Brackets</a>`
    },
    {
      url: casePk,
      title: "Peugeotkvaern.dk",
      subtitle: "Responsiv, rettelser, menu, optimering"
    },
    {
      url: caseMe,
      title: "Memoo.dk",
      subtitle: `Udvikling af tema fra bunden. Bruges til deres kunder.
            <a href="https://github.com/rasmus0201/theme-memoo" target="_blank" class="link github">
                <i class="fab fa-github"></i>
                Se temaet på GitHub
            </a>`
    },
    {
      url: caseOp,
      title: "Opskrifter.dk",
      subtitle: `Diverse rettelser og optimering.
            <a href="https://opskrifter.dk/" target="_blank" class="link">Se siden</a>`
    },
    {
      url: caseAp,
      title: "Ap-pe.dk",
      subtitle: `Dynamisk og interaktiv prisberegner. Rettelser til øvrige dele af siden.
            <a href="https://github.com/rasmus0201/wp-calculator" target="_blank" class="link github">
                <i class="fab fa-github"></i>
                Se plugin på GitHub
            </a>`
    }
  ],
  recommendations: [
    {
      name: "Memoo.dk",
      url: recommendationMemoo
    }
  ],
  date: {
    year: format(now, "yyyy")
  }
};

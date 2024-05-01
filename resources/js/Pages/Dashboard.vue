<template>
<AppLayout title="Consulenza legale in appalti pubblici">
<div class="bg-base-200 overflow-hidden">
  <div class="relative isolate">

  <!-- Benvenuto -->
  <div id="benvenuto" class="relative isolate overflow-hidden -mt-20">
    <img src="interior.webp" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
    <div class="absolute inset-0 bg-black opacity-50 -z-10"></div>
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
    <div class="mx-auto max-w-2xl py-32">
      <div class="text-center p-4 rounded">
    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
      Studio legale<br/>Avv. Giuseppe Inglese
    </h1>
    <p class="mt-6 text-lg leading-8 text-gray-300" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">
      Diritto amministrativo & civile
    </p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="tel:+39010541259" class="btn btn-primary">Chiama subito</a>
    </div>
  </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
  </div>

  <!-- Categorie -->
  <div class="container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Main content area for cards -->
      <div class="md:col-span-2 space-y-6">
        
        <!-- Card 1 -->
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.appalti'))" >
          <div class="md:w-1/3 hide-image hide-image">
            <img class="object-cover w-full h-48" src="https://www.bcmlawyers.com/wp-content/uploads/2012/09/contract-law.jpg" alt="Diritto di Famiglia">
          </div>
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Appalti pubblici e privati</h3>
            <p class="mt-2">              
              Gestiamo contenziosi su atti di gara e aggiudicazioni davanti a Tribunali Amministrativi e Consiglio di Stato, offrendo consulenza per tutte le fasi di gara e esecuzione di appalti e concessioni. Supportiamo nella redazione di documenti, assistenza contrattuale, e consulenza su Partenariato Pubblico Privato e procedure ANAC.
            </p>
            <button class="btn btn-primary mt-2" @click="$inertia.visit(route('services.appalti'))">Assistenza legale per appalti pubblici e privati</button>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.difesa'))">
          <div class="md:w-1/3 hide-image">
            <img class="object-cover bg-neutral-content w-full h-48" src="https://www.bcmlawyers.com/wp-content/uploads/2012/09/contract-law.jpg" alt="Tutela dei minori e delle persone fragili">
          </div>
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Assistenza e difesa per enti pubblici, imprese e operatori economici</h3>
            <p class="mt-2">
              Specializzati in contenziosi legati agli appalti pubblici e privati, offriamo assistenza completa davanti ai TAR, Consiglio di Stato, tribunali ordinari, e nelle procedure arbitrali. Gestiamo controversie su legittimità di atti di gara, esecuzione contrattuale, risarcimenti, e procedimenti ANAC, assicurando difesa qualificata ed efficace.
            </p>
            <button class="btn btn-primary mt-2" @click="$inertia.visit(route('services.difesa'))">Assistenza legale per enti pubblici e imprese</button>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.controversie'))">
          <div class="md:w-1/3 hide-image">
            <img class="object-cover bg-neutral-content w-full h-48" src="https://www.bcmlawyers.com/wp-content/uploads/2012/09/contract-law.jpg" alt="Tutela dei minori e delle persone fragili">
          </div>
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Soluzioni stragiudiziali per controversie negli appalti pubblici e Collegio Consultivo Tecnico</h3>
            <p class="mt-2">
              Approccio integrato alla risoluzione delle controversie negli appalti pubblici e assistenza tecnica specializzata. Inclusione di soluzioni stragiudiziali per le controversie, supporto attraverso il Collegio Consultivo Tecnico e facilitazione dell'accordo bonario sulle riserve dell'appaltatore. Competenze volte alla prevenzione dei conflitti e alla loro gestione efficace, garantendo il rispetto degli interessi e degli obiettivi dei progetti
            </p>
            <button class="btn btn-primary mt-2 mb-4" @click="$inertia.visit(route('services.appalti'))">Assistenza legale per gestione controversie e consulense tecniche</button>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.partenariato'))">
          <div class="md:w-1/3 hide-image">
            <img class="object-cover bg-neutral-content w-full h-48" src="https://www.bcmlawyers.com/wp-content/uploads/2012/09/contract-law.jpg" alt="Tutela dei minori e delle persone fragili">
          </div>
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Partenariato Pubblico-Privato e Project Financing</h3>
            <p class="mt-2">
              Focalizzazione sulla strutturazione, negoziazione e gestione di accordi di partenariato pubblico-privato (PPP) e operazioni di project financing. Copertura di tutti gli aspetti legali relativi allo sviluppo, finanziamento, realizzazione e gestione di progetti infrastrutturali e di servizio, navigazione delle complessità normative e contrattuali. Competenza in modelli di finanziamento innovativi, valutazione dei rischi e strategie di implementazione.
            </p>
            <button class="btn btn-primary mt-2 mb-4" @click="$inertia.visit(route('services.appalti'))">Assistenza legale per partnenariati e project financing</button>
          </div>
        </div>
      </div>

      <!-- Sidebar for contact information and form -->
      <div style="height: 600px;" class="bg-neutral-content p-4 rounded-lg shadow-lg " >
        <h2 class="text-xl font-bold mb-4 text-info">Se desideri un parere o hai bisogno di assistenza legale, contattaci!</h2>
        <p class="mb-4">Telefona al n. <strong>010 541259</strong> oppure compila il form</p>
        <form class="space-y-4">
          <div>
            <label for="name" class="block text-sm font-bold">Nome</label>
            <input type="text" id="name" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo nome">
          </div>
          <div>
            <label for="surname" class="block text-sm font-bold">Cognome</label>
            <input type="text" id="surname" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo cognome">
          </div>
          <div>
            <label for="email" class="block text-sm font-bold">Email</label>
            <input type="email" id="email" class="w-full p-2 rounded border border-gray-600" placeholder="La tua email">
          </div>
          <div>
            <label for="message" class="block text-sm font-bold">Messaggio</label>
            <textarea id="message" rows="4" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo messaggio"></textarea>
          </div>
          <button type="submit" class="w-full btn-primary text-white font-bold py-2 px-4 rounded">
            Richiedi informazioni
          </button>
        </form>
      </div>
    </div>
  </div>

  <!--Logo cloud-->
  <div class="mx-auto max-w-7xl px-6 sm:mt-8 lg:px-8 py-8">
    <h2 class="text-center text-lg font-semibold leading-8 text-secondary">Abbiamo collaborato con</h2>
    <div class="mx-auto mt-2 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4 bg-white p-4 rounded-md">
      <img class="col-span-2 w-full lg:col-span-1 max-h-20" style="object-fit: cover; object-position: center;" src="https://www.genovabluedistrict.com/wp-content/uploads/2021/06/loghi-UniGe-v1.jpg" />
      <img class="col-span-2 w-full lg:col-span-1 max-h-20" style="object-fit: contain; object-position: center;" src="https://yt3.googleusercontent.com/ytc/AIdro_kvzMZlgrwXZuQfbxRMdmvukOyWgl_tcl9arl2Sgw=s900-c-k-c0x00ffffff-no-rj" />
      <img class="col-span-2 max-h-20 w-full object-contain lg:col-span-1" src="https://www.federarchitetti.it/wp-content/uploads/2015/10/logo_Federarchitetti-scaled.jpg"/>
      <img class="col-span-2 max-h-20 w-full object-contain sm:col-start-2 lg:col-span-1" src="AAAL.jpg" />
    </div>
  </div>

  <!-- Casi studio 
  <div class="mt-10 p-2">
    <div class="flex flex-wrap -mx-2">
      <div v-for="caseItem in cases" :key="caseItem.id" class="w-full sm:w-1/2 lg:w-1/4 p-2">
        <div class="border border-zinc-700 p-5" @click="$inertia.visit(route('cases.show', caseItem.id))">
          <h4 class="text-xl font-semibold">{{ caseItem.title }}</h4>
          <h5 class="text-stone-400 mt-1 uppercase">{{ caseItem.meta_description }}</h5>
          <p class="mt-6" v-html="caseItem.body"></p>
        </div>
      </div>
    </div>
  </div>-->

  <!--Testimonials
  <div class="py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-xl text-center">
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">I nostri assistiti</p>
      </div>
      <div class="mx-auto mt-8 flow-root max-w-2xl lg:mx-0 lg:max-w-none">
        <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
          <div v-for="testimonial in testimonials" :key="testimonial.id" class="pt-8 sm:inline-block sm:w-full sm:px-4">
            <figure class="rounded-2xl bg-base-300 p-8 text-sm leading-6">
              <blockquote>
                <p v-html="testimonial.body"></p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <div>
                  <div class="italic">{{ `${testimonial.organization}` }}</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>-->

<!--Blog section
<div class="py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">Notizie & aggiornamenti</h2>
    </div>
    <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article v-for="post in posts" :key="post.id" class="flex flex-col items-start justify-between">
        <div class="relative w-full">
          <img :src="post.imageUrl" alt="" class="aspect-[16/9] w-full rounded-2xl object-cover sm:aspect-[2/1] lg:aspect-[3/2]" />
          <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10" />
        </div>
        <div class="max-w-xl">
          <div class="mt-8 flex items-center gap-x-4 text-xs">
            <time :datetime="post.datetime" class="text-secondary">{{ post.date }}</time>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6  group-hover:text-gray-600">
              <a :href="post.href">
                <span class="absolute inset-0" />
                {{ post.title }}
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 ">{{ post.description }}</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>-->
    
  </div>
</div>
</AppLayout>
</template>
    
<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import { CloudArrowUpIcon, LockClosedIcon, ServerIcon } from '@heroicons/vue/20/solid'
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MinusSmallIcon, PlusSmallIcon } from '@heroicons/vue/24/outline'
import { CheckIcon } from '@heroicons/vue/20/solid'

defineProps({
  categories: Array,
  articles: Array,
  testimonials: Array,
  cases: Array
})

const posts = [
  {
    id: 1,
    title: 'Commodi placeat repudiandae placeat enim.',
    href: '#',
    description:
      'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
    imageUrl:
      'https://t3.ftcdn.net/jpg/04/45/40/12/360_F_445401212_PEDNESWvENUbesA25i8E42auVqffefxY.jpg',
    date: 'Mar 16, 2020',
    datetime: '2020-03-16',
    category: { title: 'Marketing', href: '#' },
  },
  {
    id: 2,
    title: 'Commodi placeat repudiandae placeat enim.',
    href: '#',
    description:
      'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
    imageUrl:
      'https://t3.ftcdn.net/jpg/04/45/40/12/360_F_445401212_PEDNESWvENUbesA25i8E42auVqffefxY.jpg',
    date: 'Mar 16, 2020',
    datetime: '2020-03-16',
    category: { title: 'Marketing', href: '#' },
  },
  {
    id: 3,
    title: 'Commodi placeat repudiandae placeat enim.',
    href: '#',
    description:
      'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
    imageUrl:
      'https://t3.ftcdn.net/jpg/04/45/40/12/360_F_445401212_PEDNESWvENUbesA25i8E42auVqffefxY.jpg',
    date: 'Mar 16, 2020',
    datetime: '2020-03-16',
    category: { title: 'Marketing', href: '#' },
  }
]

const testimonials = [

  {
    body: 'La collaborazione con lo studio legale Inglese ha trasformato il modo in cui la mia azienda affronta le sfide legali. La loro competenza e professionalità nel diritto amministrativo e aziendale hanno portato a soluzioni innovative e efficaci.',
    organization: 'Una azienda'
  },
  {
    body: 'Come libero professionista, affrontare le questioni legali può essere scoraggiante. Tuttavia, lo studio legale Inglese mi ha fornito una guida chiara e supporto inestimabile, soprattutto in materia di diritti d autore e contratti. La loro approccio personalizzato e attenzione ai dettagli hanno fatto la differenza. Sono grato per il loro supporto e li raccomando vivamente a chiunque operi come libero professionista',
    organization: 'Una azienda'
  },
  {
    body: 'Nel settore edile, affrontare questioni legali complesse è una costante. Lo studio legale Inglese è stato un partner strategico per la nostra banca, fornendo consulenze di diritto edile di alto livello. La loro profonda conoscenza del settore e la capacità di anticipare le nostre esigenze hanno reso la nostra collaborazione estremamente fruttuosa. Senza dubbio, Inglese rappresenta un punto di riferimento nel diritto edile',
    organization: 'Rappresentante istituto edile'
  },
  {
    body: 'La collaborazione con lo studio legale Inglese ha trasformato il modo in cui la mia azienda affronta le sfide legali. La loro competenza e professionalità nel diritto amministrativo e aziendale hanno portato a soluzioni innovative e efficaci.',
    organization: 'Un imprenditore locale'
  },
  {
    body: 'La collaborazione con lo studio legale Inglese ha trasformato il modo in cui la mia azienda affronta le sfide legali. La loro competenza e professionalità nel diritto amministrativo e aziendale hanno portato a soluzioni innovative e efficaci.',
    organization: 'Un imprenditore locale'
  },
  {
    body: 'La collaborazione con lo studio legale Inglese ha trasformato il modo in cui la mia azienda affronta le sfide legali. La loro competenza e professionalità nel diritto amministrativo e aziendale hanno portato a soluzioni innovative e efficaci.',
    organization: 'Un imprenditore locale'
  },

]

const team = [
  {
    name: 'Giuseppe Inglese',
    role: 'Fondatore dello studio',
    imageUrl:
      'law1.webp',
    location: 'Toronto, Canada',
  },
  {
    name: 'Avvocato 2',
    role: 'Co-Founder / CEO',
    imageUrl:
      'law2.webp',
    location: 'Toronto, Canada',
  },
  {
    name: 'Avvocato 3',
    role: 'Co-Founder / CEO',
    imageUrl:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
    location: 'Toronto, Canada',
  }
]

/*function openCalendlyPopup(event) {
  event.preventDefault();
  Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}*/

const mobileMenuOpen = ref(false)
</script>
<style>

@media (max-width: 1024px) and (min-width: 768px) {
  .hide-image {
    display: none;
  }
}


.quill-content h1 {
  font-size: 38px;
}

.quill-content h2 {
  font-size: 30px;
}

.quill-content h3 {
  font-size: 24px;
}

.quill-content h4 {
  font-size: 18px;
}

.quill-content a {
  text-decoration: underline;
  color: blue; /* Or any desired color for links */
}

.quill-content blockquote {
  border-left: 4px solid #ccc;
  padding-left: 15px;
}

.quill-content .ql-align-center {
  text-align: center;
}

.quill-content .ql-align-right {
  text-align: right;
}

.quill-content .ql-align-left {
  text-align: left;
}

</style>
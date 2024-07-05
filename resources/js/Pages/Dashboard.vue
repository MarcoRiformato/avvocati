<template>
  <AppLayout title="Consulenza legale in appalti pubblici">
  <div class="bg-base-200 overflow-hidden">
    <div class="relative isolate">
  
      <Carousel/>
  
    <div class="container mx-auto px-4 py-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
      <div class="md:col-span-2 space-y-6">
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.appalti'))">
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Appalti pubblici e privati</h3>
            <p class="mt-2">
              Lo Studio si occupa di contenziosi relativi a procedure di gara e affidamenti di appalti e concessioni davanti ai Tribunali Amministrativi Regionali e al Consiglio di Stato, prestando consulenza a enti pubblici per la predisposizione degli atti gara e lo svolgimento delle procedure, nonché a imprese, società di ingegneria e professionisti per la partecipazione e presentazione di proposte di Partenariato Pubblico Privato, anche mediante Consorzi e Raggruppamenti Temporanei di imprese (RTI/ATI). Inoltre, offre consulenza e assistenza a enti e privati per l'esecuzione di appalti e concessioni, gestione di subappalti e forniture, acquisizione di benefici fiscali (bonus edilizi), procedure concorsuali, riconoscimento delle riserve e risoluzione delle controversie tramite accordi bonari e Collegi Consultivi Tecnici.
            </p>
          </div>
        </div>

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.difesa'))">
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Assistenza e difesa per enti pubblici, imprese e operatori economici</h3>
            <p class="mt-2">
              Lo Studio è specializzato nei contenziosi legati agli appalti pubblici e privati, offre assistenza completa davanti ai TAR, al Consiglio di Stato, a Tribunali civili, Corti d’Appello e Cassazione, nei giudizi arbitrali anche davanti alle diverse Camere Arbitrali nonché nei procedimenti avviati dall’ANAC, assicurando difesa qualificata ed efficace.
            </p>
          </div>
        </div>

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.controversie'))">
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Soluzioni stragiudiziali per controversie negli appalti pubblici e Collegio Consultivo Tecnico</h3>
            <p class="mt-2">
              Lo Studio offre un approccio integrato alla risoluzione stragiudiziale delle controversie negli appalti pubblici e assistenza specializzata nelle fasi di affidamento ed esecuzione, compresa l’attività del Collegio Consultivo Tecnico e il tentativo di accordo bonario sulle riserve dell'appaltatore. Ha competenze volte alla prevenzione dei conflitti e alla loro gestione efficace, garantendo il rispetto degli interessi e degli obiettivi dei propri Assistiti.
            </p>
          </div>
        </div>

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.partenariato'))">
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Partenariato Pubblico-Privato e Project Financing</h3>
            <p class="mt-2">
              Lo Studio ha maturato esperienza nella strutturazione, negoziazione e gestione di procedure di Partenariato Pubblico Privato (PPP) e in particolare di operazioni di project financing e leasing in costruendo. Garantisce assistenza per gli aspetti legali relativi allo sviluppo, al finanziamento, alla realizzazione e alla gestione di progetti di opere pubbliche e di servizi.
            </p>
          </div>
        </div>

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.altri'))">
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Altri servizi di consulenza</h3>
            <p class="mt-2">
              Lo Studio fornisce consulenza e assistenza in diversi settori del diritto amministrativo, contratti e obbligazioni, responsabilità civile, tutela e recupero del credito, diritti reali, problematiche condominiali e locatizie. Offriamo un supporto completo e personalizzato per affrontare e risolvere le questioni legali più complesse, garantendo un approccio integrato e multidisciplinare per tutelare gli interessi dei nostri Assistiti.
            </p>
          </div>
        </div>
      </div>

        <!-- Form -->
        <div style="height: 600px;" class="bg-neutral-content p-4 rounded-lg shadow-lg">
          <h2 class="text-xl font-bold mb-4 text-info">Se desideri un parere o hai bisogno di assistenza legale, contattaci!</h2>
          <p class="mb-4">Telefona al n. <strong>010 541259</strong> oppure compila il form</p>
          <form class="space-y-4" @submit.prevent="sendEmail">
            <div>
              <label for="name" class="block text-sm font-bold">Nome</label>
              <input type="text" id="name" v-model="name" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo nome">
            </div>
            <div>
              <label for="surname" class="block text-sm font-bold">Cognome</label>
              <input type="text" id="surname" v-model="surname" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo cognome">
            </div>
            <div>
              <label for="email" class="block text-sm font-bold">Email</label>
              <input type="email" id="email" v-model="email" class="w-full p-2 rounded border border-gray-600" placeholder="La tua email">
            </div>
            <div>
              <label for="message" class="block text-sm font-bold">Messaggio</label>
              <textarea id="message" v-model="message" rows="4" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo messaggio"></textarea>
            </div>
            <button type="submit" class="w-full btn-primary text-white font-bold py-2 px-4 rounded">
              Richiedi informazioni
            </button>
          </form>
        </div>
      </div>
    </div>
  
    <!-- Collaborato con -->
    <div class="mx-auto max-w-7xl px-6 sm:mt-8 lg:px-8 py-8">
      <h2 class="text-center text-lg font-semibold leading-8 text-secondary">Abbiamo collaborato con</h2>
      <div class="mx-auto mt-2 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4 bg-white p-4 rounded-md">
        <img class="col-span-2 w-full lg:col-span-1 max-h-20" style="object-fit: cover; object-position: center;" src="https://www.genovabluedistrict.com/wp-content/uploads/2021/06/loghi-UniGe-v1.jpg" />
        <img class="col-span-2 w-full lg:col-span-1 max-h-20" style="object-fit: contain; object-position: center;" src="https://yt3.googleusercontent.com/ytc/AIdro_kvzMZlgrwXZuQfbxRMdmvukOyWgl_tcl9arl2Sgw=s900-c-k-c0x00ffffff-no-rj" />
        <img class="col-span-2 max-h-20 w-full object-contain lg:col-span-1" src="ordine-avvocati-genova.webp"/>
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
  import { ref, watch } from 'vue'
  import { Inertia } from '@inertiajs/inertia';
  import AppLayout from '@/Layouts/AppLayout.vue';
  import { CloudArrowUpIcon, LockClosedIcon, ServerIcon } from '@heroicons/vue/20/solid'
  import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
  import { MinusSmallIcon, PlusSmallIcon } from '@heroicons/vue/24/outline'
  import { CheckIcon } from '@heroicons/vue/20/solid'
  import Carousel from '../Components/Carousel.vue'
  
  defineProps({
    categories: Array,
    articles: Array,
    testimonials: Array,
    cases: Array
  })
  
  const name = ref('');
  const surname = ref('');
  const email = ref('');
  const message = ref('');
  
  watch([name, surname, email, message], () => {
    console.log("Data:", name.value, surname.value, email.value, message.value);
  }, { deep: true });
  
  const sendEmail = () => {
    console.log("Sending Data:", name.value, surname.value, email.value, message.value);
    Inertia.post('/send-email', {
      name: name.value,
      surname: surname.value,
      email: email.value,
      message: message.value
    });
  }
  
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
  
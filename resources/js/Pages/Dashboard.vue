<template>
<AppLayout title="Main">
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
      <a href="#" class="btn btn-primary" @click.prevent="openCalendlyPopup">Prenota consulenza</a>
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
        <div class="flex flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.secondaryIndex'))" >
          <div class="md:w-1/3">
            <img class="object-cover w-full h-48" src="https://lh3.googleusercontent.com/proxy/B-WVZlpBTv9BnbL9rkJSLL3nQaeUTNmeCKSW9EfBYXfY-uzyqiKkXnmI5HMk8XnlKA9cLnQuky8vq7w_wwZQskpNfUHD" alt="Diritto di Famiglia">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-info">Appalti pubblici e privati</h3>
            <p class="mt-2">              
              Gestiamo contenziosi su atti di gara e aggiudicazioni davanti a Tribunali Amministrativi e Consiglio di Stato, offrendo consulenza per tutte le fasi di gara e esecuzione di appalti e concessioni. Supportiamo nella redazione di documenti, assistenza contrattuale, e consulenza su Partenariato Pubblico Privato e procedure ANAC.
            </p>
            <button class="btn btn-success mt-2" @click="$inertia.visit(route('services.secondary'))">Assistenza legale per appalti pubblici e privati</button>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="flex flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.secondaryIndex'))">
          <div class="md:w-1/3">
            <img class="object-cover w-full h-48" src="https://lh3.googleusercontent.com/proxy/B-WVZlpBTv9BnbL9rkJSLL3nQaeUTNmeCKSW9EfBYXfY-uzyqiKkXnmI5HMk8XnlKA9cLnQuky8vq7w_wwZQskpNfUHD" alt="Tutela dei minori e delle persone fragili">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-info">Edilizia</h3>
            <p class="mt-2">
              Affrontiamo controversie su permessi di costruire e autorizzazioni paesaggistiche, offrendo consulenza per la redazione di documenti procedimentali e gestendo i rapporti con le amministrazioni in fase pre-contenziosa.
            </p>
            <button class="btn btn-success mt-2">Assistenza legale per edilizia</button>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="flex flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.secondaryIndex'))">
          <div class="md:w-1/3">
            <img class="object-cover w-full h-48" src="https://lh3.googleusercontent.com/proxy/B-WVZlpBTv9BnbL9rkJSLL3nQaeUTNmeCKSW9EfBYXfY-uzyqiKkXnmI5HMk8XnlKA9cLnQuky8vq7w_wwZQskpNfUHD" alt="Tutela dei minori e delle persone fragili">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-info">Contratti e obbligazioni</h3>
            <p class="mt-2">
              Assistenza e consulenza in materia di contrattualistica, con particolare riferimento alla redazione, all'interpretazione, all'adempimento e all'esecuzione dei contratti e alle azioni a tutela dei contraenti
            </p>
            <button class="btn btn-success mt-2">Assistenza legale per contratti e obbligazioni</button>
          </div>
        </div>
      </div>

      <!-- Sidebar for contact information and form -->
      <div class="bg-gray-800 text-white p-4 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Se desideri un parere o hai bisogno di assistenza legale, contattaci!</h2>
        <p class="mb-4">Telefona al n. <strong>010 541259</strong> oppure compila il form</p>
        <form class="space-y-4">
          <div>
            <label for="name" class="block text-sm font-bold">Nome</label>
            <input type="text" id="name" class="w-full p-2 rounded bg-gray-700 border border-gray-600" placeholder="Il tuo nome">
          </div>
          <div>
            <label for="surname" class="block text-sm font-bold">Cognome</label>
            <input type="text" id="surname" class="w-full p-2 rounded bg-gray-700 border border-gray-600" placeholder="Il tuo cognome">
          </div>
          <div>
            <label for="email" class="block text-sm font-bold">Email</label>
            <input type="email" id="email" class="w-full p-2 rounded bg-gray-700 border border-gray-600" placeholder="La tua email">
          </div>
          <div>
            <label for="message" class="block text-sm font-bold">Messaggio</label>
            <textarea id="message" rows="4" class="w-full p-2 rounded bg-gray-700 border border-gray-600" placeholder="Il tuo messaggio"></textarea>
          </div>
          <button type="submit" class="w-full btn-success text-white font-bold py-2 px-4 rounded">
            Richiedi informazioni
          </button>
        </form>
      </div>
    </div>
  </div>

  <!--Logo cloud-->
  <div class="mx-auto max-w-7xl px-6 sm:mt-8 lg:px-8 py-12">
    <h2 class="text-center text-lg font-semibold leading-8 text-white">Parlano di noi</h2>
    <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4 bg-white p-4 rounded-md">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://theitalianseagroup.com/wp-content/uploads/2019/09/logo-Il-Tirreno.png" alt="Transistor" width="300" height="100" />
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://www.filodiritto.com/themes/custom/webit/images/logo-20.png" alt="Reform" width="158" height="48" />
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Il_Sole_24_Ore.svg/2560px-Il_Sole_24_Ore.svg.png" alt="Tuple" width="158" height="48" />
      <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://www.cristianocremonini.com/wp-content/uploads/2017/12/la-repubblica-logo-copia.jpg" alt="SavvyCal" width="158" height="48" />
    </div>
  </div>

  <!--Blog section-->
  <div class="py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-info sm:text-4xl">Notizie & aggiornamenti</h2>
      </div>
      <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
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
  
  <!-- Us -->
  <div class="relative isolate -z-10 overflow-hidden bg-gradient-to-b from-indigo-100/20">
    <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96" aria-hidden="true" />
    <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
        <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">Professionisti del settore</h1>
        <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
          <p class="text-lg leading-8 text-gray-600">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </div>
        <img src="us.webp" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36" />
      </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32" />
  </div>
  
  <!--La squadra
  <div class="mx-auto max-w-7xl sm:mt-20 flex flex-wrap md:flex-nowrap">
  <div class="w-full p-4">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Chi siamo</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">Il team del nostro studio legale è composto da professionisti del diritto con specializzazioni che coprono tutti i settori della giurisprudenza. Avvocati, praticanti e consulenti lavorano in sinergia per fornire soluzioni innovative e strategie vincenti. </p>
      </div>
      <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
        <li v-for="person in team" :key="person.name">
          <img class="aspect-[14/13] w-full rounded-2xl object-cover" :src="person.imageUrl" alt="" />
          <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-white">{{ person.name }}</h3>
          <p class="text-base leading-7 text-gray-300">{{ person.role }}</p>
          <p class="text-sm leading-6 text-gray-500">{{ person.location }}</p>
        </li>
      </ul>
    </div>
  </div>-->

  <!--Testimonials-->
  <div class="py-8">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-xl text-center">
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl">Abbiamo difeso i diritti di centinaia di persone</p>
      </div>
      <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
        <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
          <div v-for="testimonial in testimonials" :key="testimonial.id" class="pt-8 sm:inline-block sm:w-full sm:px-4">
            <figure class="rounded-2xl bg-secondary-content p-8 text-sm leading-6">
              <blockquote>
                <p v-html="testimonial.body"></p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <img class="h-10 w-10 rounded-full bg-secondary-content" src="https://www.hagopsphotography.com/wp-content/uploads/2021/09/corporate-male-headshot.jpg" />
                <div>
                  <div class="">{{ `${testimonial.organization}` }}</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="-mt-20 -mb-20 mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
      <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Fissa subito un appuntamento</h2>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="btn btn-primary">Fissa appuntamento</a>
        <a href="#" class="text-sm font-semibold leading-6 text-white">Casi studio <span aria-hidden="true">→</span></a>
      </div>
      <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
        <defs>
          <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
            <stop stop-color="#7775D6" />
            <stop offset="1" stop-color="#E935C1" />
          </radialGradient>
        </defs>
      </svg>
    </div>
  </div>

  <!-- FAQs
  <div
  id="faq"
  class="-mt-20 mx-auto max-w-7xl px-6 sm:py-32 lg:px-8 lg:py-40">
    <div class="mx-auto max-w-4xl divide-y divide-white/10">
      <h2 class="text-2xl font-bold leading-10 tracking-tight text-white">Frequently asked questions</h2>
      <dl class="mt-10 space-y-6 divide-y divide-white/10">
        <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
          <dt>
            <DisclosureButton class="flex w-full items-start justify-between text-left text-white">
              <span class="text-base font-semibold leading-7">{{ faq.question }}</span>
              <span class="ml-6 flex h-7 items-center">
                <PlusSmallIcon v-if="!open" class="h-6 w-6" aria-hidden="true" />
                <MinusSmallIcon v-else class="h-6 w-6" aria-hidden="true" />
              </span>
            </DisclosureButton>
          </dt>
          <DisclosurePanel as="dd" class="mt-2 pr-12">
            <p class="text-base leading-7 text-gray-300">{{ faq.answer }}</p>
          </DisclosurePanel>
        </Disclosure>
      </dl>
    </div>
  </div> -->
    
  </div>
</div>
</AppLayout>
</template>
    
<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue';
import { Dialog, DialogPanel } from '@headlessui/vue'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
import { ChevronRightIcon } from '@heroicons/vue/20/solid'
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
      'https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80',
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
      'https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80',
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
      'https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80',
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
    name: 'Leslie Alexander',
    role: 'Co-Founder / CEO',
    imageUrl:
      'law1.webp',
    location: 'Toronto, Canada',
  },
  {
    name: 'Tizio 2',
    role: 'Co-Founder / CEO',
    imageUrl:
      'law2.webp',
    location: 'Toronto, Canada',
  },
  {
    name: 'Tizio 3',
    role: 'Co-Founder / CEO',
    imageUrl:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
    location: 'Toronto, Canada',
  }
]

function openCalendlyPopup(event) {
  event.preventDefault();
  Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}

const mobileMenuOpen = ref(false)
</script>
<style>
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
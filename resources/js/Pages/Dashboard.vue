<template>
<AppLayout title="Main">
<div class="bg-base-200 overflow-hidden">
  <div class="relative isolate">

  <!-- Benvenuto -->
  <div id="benvenuto" class="relative isolate overflow-hidden">
    <img src="interior.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Studio legale<br/> Antonio Petrocchi</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">Difendiamo i vostri diritti da 3 generazioni</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Parliamo</a>
          <a href="#" class="text-sm font-semibold leading-6 text-white">Scopri di più <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
  </div>
  
  <!--Logo cloud-->
  <div class="mx-auto mt-8 max-w-7xl px-6 sm:mt-16 lg:px-8">
    <h2 class="text-center text-lg font-semibold leading-8 text-white">Siamo stati menzionati dai seguenti siti</h2>
    <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" width="158" height="48" />
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158" height="48" />
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158" height="48" />
      <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158" height="48" />
      <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158" height="48" />
    </div>
  </div>

<!-- Casi studio -->
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
  </div>


  <!-- Categorie 
  <div class="mt-10 flex flex-wrap justify-center">
    <div 
    v-for="category in categories" 
    :key="category.id"
    class="card w-full sm:w-1/3 md:w-1/4 lg:w-1/6 py-4 m-2 bg-base-100 shadow-xl"
  >
    <figure>
      <img
      v-if="category.media && category.media.filepath" class="px-2" :src="'/storage/' + category.media.filepath"
      alt="Category Image" />
      <img v-else src="https://picsum.photos/300" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">{{ category.name }}</h2>
      <p v-html="category.description"></p>
    </div>
  </div>
  </div>-->

  <!-- Us -->
  <div class="relative isolate -z-10 overflow-hidden bg-gradient-to-b from-indigo-100/20 pt-14">
    <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96" aria-hidden="true" />
    <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
        <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">Professionisti del Diritto al Servizio della Giustizia e della Verità</h1>
        <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
          <p class="text-lg leading-8 text-gray-600">Fondata oltre trent'anni fa nel cuore di Firenze, la nostra società legale si è distinta per l'impegno intransigente nella tutela dei diritti dei cittadini e delle imprese. Con una squadra di avvocati altamente qualificati e un approccio che coniuga tradizione e innovazione, offriamo consulenze legali su misura per navigare la complessità del sistema giuridico italiano</p>
        </div>
        <img src="us.webp" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36" />
      </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32" />
  </div>

  <!--La squadra-->
  <div class="mx-auto max-w-7xl px-6 sm:mt-20 lg:px-8 flex flex-wrap md:flex-nowrap">
  <div class="w-full p-4">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">La squadra</h2>
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
  </div>

  <!-- CTA -->
  <div class="-mt-20 -mb-20 mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
      <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Dacci 100 giorni. Sei pronto?</h2>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="#" class="btn btn-primary">Sono pronto</a>
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

  <!--Testimonials-->
  <div class=" py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-xl text-center">
        <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
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
                <img class="h-10 w-10 rounded-full bg-secondary-content" :src="'/storage/' + testimonial.filepath" alt="" />
                <div>
                  <div class="font-semibold ">{{ testimonial.name }}</div>
                  <div class="">{{ `${testimonial.organization}` }}</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Blog section-->
  <div class="py-24 -mt-20 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight  sm:text-4xl" 
        @click="$inertia.visit(route('articles.index'))"
        >Dal nostro blog</h2>
        <p class="mt-2 text-lg leading-8 ">Leggi le ultime notizie per la giustizia in Italia</p>
      </div>
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article v-for="article in articles" :key="article.id" 
        @click="$inertia.visit(route('articles.show', article.id))" 
        class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time :datetime="article.datetime" class="">{{ article.date }}</time>
            <a  class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium  hover:bg-gray-100"> article.category.title </a>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 ">
              <p>
              <span class="absolute inset-0" />
                {{ article.title }}
            </p>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm leading-6 ">{{ article.meta_description }}</p>
          </div>
        </article>
      </div>
    </div>
  </div>

  <!-- FAQs -->
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
  </div>
    
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

const faqs = [
  {
    question: "Di cosa ti occupi?",
    answer:
      "Sono specializzato in sviluppo, SEO, ottimizzazione vendite e marketing per gli studi legali",
  }
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
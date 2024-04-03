<template>
<AppLayout title="Lo studio">
<!-- Us -->
<div class="relative isolate -z-10 overflow-hidden bg-gradient-to-b from-indigo-100/20">
  <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96" aria-hidden="true" />
  <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
      <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-primary sm:text-6xl lg:col-span-2 xl:col-auto">Professionisti del settore</h1>
      <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
        <p class="text-lg leading-8 text-gray-600">
        Lo Studio Legale Inglese, situato nel cuore di Genova, offre consulenza legale specializzata in materia di appalti, pubblici e privati, ma anche partenariati pubblici, project financing e altri servizi.<br/><br/> L'avv. Giuseppe Inglese fondatore e titolare dello studio, è riconosciuto per la sua eccellenza nel diritto amministrativo e civile<br/><br/> Partecipa attivamente a convegni e corsi di formazione, dimostrando un impegno costante per l'aggiornamento e l'eccellenza professionale. Questo approccio olistico e innovativo ci rende un punto di riferimento per enti pubblici e aziende private alla ricerca di consulenza legale di alto livello. 
        </p>
      </div>
      <img src="us.webp" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36" />
    </div>
  </div>
  <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32" />
</div>

<!--La squadra-->
<div class="mx-auto max-w-7xl sm:mt-20 flex flex-wrap md:flex-nowrap mb-20">
<div class="w-full p-4">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">Chi siamo</h2>
    </div>
    <ul role="list" class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
      <li v-for="person in team" :key="person.name">
        <img class="aspect-[14/13] w-full rounded-2xl object-cover" :src="person.imageUrl" alt="" />
        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight">{{ person.name }}</h3>
        <p class="text-base leading-7">{{ person.role }}</p>
      </li>
    </ul>
  </div>
</div>
</AppLayout>
</template>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
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
</script>
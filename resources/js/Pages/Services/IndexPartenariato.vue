<template>
    <AppLayout title="Indice appalti">
    <div class="text-center pb-12">
    <h1 class="text-3xl py-4">Partenariato Pubblico-Privato e Project Financing</h1>
    <div class="divide-y divide-gray-200 overflow-hidden rounded-lg shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0 mx-8 my-4">
    <div
    @click="$inertia.visit(route(action.href))"
    v-for="(action, actionIdx) in servizi" class="bg-base-200 cursor-pointer" :key="action.title" :class="[actionIdx === 0 ? 'rounded-tl-lg rounded-tr-lg sm:rounded-tr-none' : '', actionIdx === 1 ? 'sm:rounded-tr-lg' : '', actionIdx === servizi.length - 2 ? 'sm:rounded-bl-lg' : '', actionIdx === servizi.length - 1 ? 'rounded-bl-lg rounded-br-lg sm:rounded-bl-none' : '', 'group relative p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500']" 
    
    >
      <div>
        <span :class="[action.iconBackground, action.iconForeground, 'inline-flex rounded-lg p-3 ring-4 ring-white']">
          <component :is="action.icon" class="h-6 w-6" aria-hidden="true" />
        </span>
      </div>
      <div class="mt-8 ">
        <h3 class="text-base font-semibold leading-6" >
            <!-- Extend touch target to entire panel -->
            <span class="absolute inset-0" aria-hidden="true" />
            {{ action.title }}
        </h3>
        <p class="mt-2 text-sm">{{ action.description }}</p>
      </div>
      <span class="pointer-events-none absolute right-6 top-6 group-hover:text-gray-400" aria-hidden="true">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
        </svg>
      </span>
    </div>
  </div>
  </div>
    </AppLayout>
  </template>
      
  <script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import {
    BuildingLibraryIcon,
    ChatBubbleLeftRightIcon,
    HandThumbUpIcon,
    MagnifyingGlassIcon
  } from '@heroicons/vue/24/outline'
  
  const navigateToSecondary = () => {
    window.location.href = 'services/secondaryIndex';
  };
  
  const servizi = [
    {
      title: 'Gestione di Contenziosi presso TAR e Consiglio di Stato',
      icon: BuildingLibraryIcon,
      iconForeground: 'text-teal-700',
      iconBackground: 'bg-teal-50',
      href: 'arbitrato_appalti',
      description: 'Specializzati nella risoluzione di controversie legate alla legittimità di atti di gara, nonché di provvedimenti di ammissione, esclusione e aggiudicazione di appalti e concessioni. L\'obiettivo è assicurare che ogni fase del processo di gara sia condotta in piena conformità con la legge, garantendo la tutela dei diritti dei nostri clienti.'
    },
    {
      title: 'Assistenza Legale in Contenziosi Civili',
      icon: ChatBubbleLeftRightIcon,
      iconForeground: 'text-purple-700',
      iconBackground: 'bg-purple-50',
      href: 'contenziosi_civili',
      description: 'Forniamo rappresentanza legale di fronte a Tribunale, Corte d\'Appello e Cassazione per controversie che emergono durante l\'esecuzione di appalti pubblici e privati. Incluse problematiche relative all\'adempimento contrattuale, riserve, risoluzione e recesso del contratto, responsabilità per danni e richieste di risarcimento, assicurando una gestione efficace delle vertenze'
    },
    {
      title: 'Servizi di Arbitrato per Appalti e Lavori Pubblici',
      icon: HandThumbUpIcon,
      iconForeground: 'text-sky-700',
      iconBackground: 'bg-sky-50',
      href: 'contenziosi_tar',
      description: 'Il nostro studio offre servizi di arbitrato, agendo sia come arbitri che come difensori in controversie arbitrali. Siamo esperti nei procedimenti gestiti dalla Camera Arbitrale dei Lavori Pubblici e dalle Camere Arbitrali di Milano e Roma, garantendo una rappresentanza legale esperta e su misura per risolvere le dispute in modo efficace.'
    },
    {
      title: 'Assistenza Legale nei Procedimenti ANAC',
      icon: MagnifyingGlassIcon,
      iconForeground: 'text-yellow-700',
      iconBackground: 'bg-yellow-50',
      href: 'procedimenti_anac',
      description: 'Forniamo consulenza e rappresentanza legale specializzata nei procedimenti davanti all’Autorità Nazionale Anticorruzione (ANAC). Il nostro team di esperti guida i clienti attraverso la complessità delle normative di settore, assicurando conformità e una difesa efficace in ogni fase del procedimento.'
    }
  ]
  </script>
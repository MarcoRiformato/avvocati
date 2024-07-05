<template>
    <AppLayout title="Indice appalti">
      <div class="text-center pb-12">
        <h1 class="text-3xl py-4">Altri servizi di consulenza</h1>
        <div class="divide-y divide-gray-200 overflow-hidden rounded-lg shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0 mx-8 my-4">
          <div
            @click="$inertia.visit(route(action.href))"
            v-for="(action, actionIdx) in servizi" 
            class="bg-base-200 cursor-pointer" 
            :key="action.title" 
            :class="[actionIdx === 0 ? 'rounded-tl-lg rounded-tr-lg sm:rounded-tr-none' : '', actionIdx === 1 ? 'sm:rounded-tr-lg' : '', actionIdx === servizi.length - 2 ? 'sm:rounded-bl-lg' : '', actionIdx === servizi.length - 1 ? 'rounded-bl-lg rounded-br-lg sm:rounded-bl-none' : '', 'group relative p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500']"
          >
            <div>
              <span :class="[action.iconBackground, action.iconForeground, 'inline-flex rounded-lg p-3 ring-4 ring-white']">
                <component :is="action.icon" class="h-6 w-6" aria-hidden="true" />
              </span>
            </div>
            <div class="mt-8 ">
              <h3 class="text-base font-semibold leading-6">
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
    ScaleIcon,
    DocumentTextIcon,
    HomeIcon
  } from '@heroicons/vue/24/outline'
  
  const navigateToSecondary = () => {
    window.location.href = 'services/secondaryIndex';
  };
  
  const servizi = [
    {
      title: 'Altri settori del Diritto amministrativo',
      icon: ScaleIcon,
      iconForeground: 'text-teal-700',
      iconBackground: 'bg-teal-50',
      href: 'altri',
      description: 'Consulenza e assistenza stragiudiziale e giudiziale nei settori dell’edilizia e dell’urbanistica, dei servizi pubblici, della sanità, degli enti locali, del pubblico impiego'
    },
    {
      title: 'Contratti e obbligazioni. Responsabilità civile. Tutela e recupero del credito',
      icon: DocumentTextIcon,
      iconForeground: 'text-purple-700',
      iconBackground: 'bg-purple-50',
      href: 'contratti_obbligazioni',
      description: 'Assistenza e consulenza in materia contrattualistica con riferimento alla redazione, all\'interpretazione, all\'adempimento e all\'esecuzione di atti negoziali e alle pertinenti azioni stragiudiziali e giudiziali a tutela dei propri Assistiti, comprese azioni relative alle diverse ipotesi di responsabilità, inadempimento e risarcimento del danno, contrattuale ed extracontrattuale, patrimoniale e non patrimoniale nonché tutela e recupero dei crediti.'
    },
    {
      title: 'Diritti reali, problematiche condominiali e locatizie',
      icon: HomeIcon,
      iconForeground: 'text-purple-700',
      iconBackground: 'bg-purple-50',
      href: 'diritti_reali',
      description: 'Assistenza nelle problematiche relative alla tutela della proprietà, dei diritti reali e del possesso nonché questioni condominiali e locatizie, mediante assistenza stragiudiziale e giudiziale, ivi comprese le procedure di sfratto e la conseguente fase esecutiva.'
    }
  ];
  </script>
  
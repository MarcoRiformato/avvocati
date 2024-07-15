<template>
    <AppLayout title="Indice appalti">
    <div class="text-center pb-12">
    <h1 class="text-3xl py-4">Assistenza legale in appalti pubblici e privati</h1>
    <div class="divide-y divide-gray-400 overflow-hidden rounded-lg shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0 mx-8 my-4">
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
  BuildingOffice2Icon,
  BriefcaseIcon,
  Cog6ToothIcon,
  ClipboardDocumentCheckIcon

} from '@heroicons/vue/24/outline'

const navigateToSecondary = () => {
  window.location.href = 'services/secondaryIndex';
};

const servizi = [
  {
    title: 'Consulenza alle stazioni appaltanti ',
    icon: BuildingOffice2Icon,
    iconForeground: 'text-teal-700',
    iconBackground: 'bg-teal-50',
    href: "services.detail.stazioni",
    description: 'Supporto al Responsabile Unico del Procedimento (RUP), assistenza nella programmazione e progettazione, redazione degli atti di gara, e gestione di tutte le fasi della gara. Esclusione o ammissione dei concorrenti, verifica dell\' anomalia dell offerta,aggiudicazione.'
  },
  {
    title: 'Consulenza alle imprese / operatori economici',
    icon: BriefcaseIcon,
    iconForeground: 'text-purple-700',
    iconBackground: 'bg-purple-50',
    href: "services.detail.imprese",
    description: 'Assistenza nelle procedure di gara, partecipazione, soccorso istruttorio, redazione delle giustificazioni per la congruità dell’offerta'
  },
  {
    title: 'Consulenza ai professionisti tecnici',
    icon: Cog6ToothIcon,
    iconForeground: 'text-sky-700',
    iconBackground: 'bg-sky-50',
    href: "services.detail.professionisti",
    description: 'Assistenza nelle procedure di gara e nell’esecuzione dell’appalto, programmazione, progettazione, direzione dei lavori, coordinamento della sicurezza, collaudo'
  },
  {
    title: 'Fase di esecuzione degli appalti',
    icon: ClipboardDocumentCheckIcon,
    iconForeground: 'text-yellow-700',
    iconBackground: 'bg-yellow-50',
    href: "services.detail.esecuzione",
    description: 'Assistenza al RUP e alle stazioni appaltanti, a imprese/operatori economici e a professionisti tecnici nell’esecuzione degli appalti, consegna, sospensioni, varianti, subappalti, riserve, contabilità, revisione dei prezzi, risoluzione, recesso, collaudo, accordi bonari, transazioni, CCT.'
  }
]
</script>
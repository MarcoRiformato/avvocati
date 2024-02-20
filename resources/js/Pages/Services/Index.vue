<template>
  <AppLayout>
  <div class="container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Main content area for cards -->
      <div class="md:col-span-2 space-y-6">
        <!-- Card 1 -->
        <div class="flex flex-col md:flex-row rounded-lg shadow-lg overflow-hidden">
          <div class="md:w-1/3">
            <img class="object-cover w-full h-48" src="placeholder.webp" alt="Diritto di Famiglia">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-info">Diritto di Famiglia</h3>
            <p class="mt-2">
              L'avvocato Barbara D'Angelo si occupa in prevalenza di diritto di famiglia, separazione, divorzio, affidamento dei figli ed altre controversie afferenti la sfera familiare.
            </p>
            <button class="btn btn-success mt-2" @click="$inertia.visit(route('services.secondary'))">Assistenza legale nella separazione, nel divorzio e nelle vertenze familiari</button>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="flex flex-col md:flex-row rounded-lg shadow-lg overflow-hidden">
          <div class="md:w-1/3">
            <img class="object-cover w-full h-48" src="placeholder.webp" alt="Tutela dei minori e delle persone fragili">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-info">Tutela dei minori e delle persone fragili</h3>
            <p class="mt-2">
              Amministrazione di sostegno, interdizione, trust e vincoli sul patrimonio, affidamento familiare, adozione, riconoscimento del figlio, protezione contro la violenza domestica.
            </p>
            <button class="btn btn-success mt-2">Assistenza legale a tutela dei minori e delle persone fragili</button>
          </div>
        </div>
      </div>

      <!-- Sidebar for contact information and form -->
      <div class="bg-gray-800 text-white p-4 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Se desideri un parere o hai bisogno di assistenza legale, contattaci!</h2>
        <p class="mb-4">Telefona al n. <strong>051 237070</strong> oppure compila il form</p>
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
          <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            Richiedi informazioni
          </button>
        </form>
      </div>
    </div>
  </div>
</AppLayout>
</template>


<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
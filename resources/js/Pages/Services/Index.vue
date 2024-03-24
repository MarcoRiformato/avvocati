<template>
  <AppLayout title="Indice attività">
  <div class="container mx-auto px-4 py-6 mb-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Main content area for cards -->
      <div class="md:col-span-2 space-y-6">
        
        <!-- Card 1 -->
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.appalti'))" >
          <div class="md:w-1/3">
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
          <div class="md:w-1/3">
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
          <div class="md:w-1/3">
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
          <div class="md:w-1/3">
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
</AppLayout>
</template>


<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
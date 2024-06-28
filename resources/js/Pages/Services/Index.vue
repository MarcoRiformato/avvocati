<template>
  <AppLayout title="Indice attività">
  <div class="container mx-auto px-4 py-6 mb-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Main content area for cards -->
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
            <h3 class="text-lg font-semibold text-primary">Consulenza Legale Generale</h3>
            <p class="mt-2">
              Lo Studio fornisce consulenza e assistenza in diversi settori del diritto amministrativo, contratti e obbligazioni, responsabilità civile, tutela e recupero del credito, diritti reali, problematiche condominiali e locatizie. Offriamo un supporto completo e personalizzato per affrontare e risolvere le questioni legali più complesse, garantendo un approccio integrato e multidisciplinare per tutelare gli interessi dei nostri Assistiti.
            </p>
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
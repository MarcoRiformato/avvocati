<template>
    <AppLayout title="Leggi articolo">
    
    <div  class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
      <div class="md:col-span-2 space-y-6">
        <div class="px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-base leading-7">
              <h1 class="mt-2 text-3xl font-bold tracking-tight text-info sm:text-4xl">Diritti reali, problematiche condominiali e locatizie</h1>
              <div class="mt-6 max-w-2xl">
                <p>Lo studio legale Giuseppe Inglese si occupa con competenza delle problematiche inerenti la tutela della proprietà, dei diritti reali e del possesso, offrendo un servizio completo sia in ambito stragiudiziale che giudiziale. Il nostro team di esperti è a disposizione per gestire questioni complesse relative ai diritti di proprietà, assicurando che ogni aspetto legale sia curato con la massima attenzione. Siamo pronti a fornire consulenza e assistenza anche in merito a controversie legate al possesso, garantendo ai nostri clienti soluzioni efficaci e tempestive.</p>

                <p class="py-4">Inoltre, lo studio Giuseppe Inglese affronta problematiche condominiali e locatizie, offrendo supporto legale per la risoluzione di controversie condominiali e la gestione dei rapporti di locazione. Ci occupiamo delle procedure di sfratto e della conseguente fase esecutiva, assicurando che i diritti dei nostri assistiti siano tutelati in ogni fase del processo. La nostra esperienza ci permette di fornire un'assistenza completa e qualificata, affrontando con professionalità ogni problematica condominiale e locatizia.</p>
              </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-between md:space-x-4 space-y-2 md:space-y-0 px-8">
            <button 
            @click="shareOnFacebook"
            class="btn btn-secondary w-full md:w-auto">
            Condividi
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="16" height="16" viewBox="0 0 50 50" style="null" class="icon icons8-Facebook-Filled" >    <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path></svg>
        
            </button>
            <button
            @click="shareOnWhatsApp" 
            class="btn btn-primary w-full md:w-auto">
            Condividi
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/> </svg>
            </button>
            <button 
            @click="copyLinkToClipboard"
            class="btn btn-accent w-full md:w-auto">
            Copia indirizzo
            <svg fill="#000000" height="16" width="16" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            viewBox="0 0 352.804 352.804" xml:space="preserve">
        <g>
            <path d="M318.54,57.282h-47.652V15c0-8.284-6.716-15-15-15H34.264c-8.284,0-15,6.716-15,15v265.522c0,8.284,6.716,15,15,15h47.651
            v42.281c0,8.284,6.716,15,15,15H318.54c8.284,0,15-6.716,15-15V72.282C333.54,63.998,326.824,57.282,318.54,57.282z
                M49.264,265.522V30h191.623v27.282H96.916c-8.284,0-15,6.716-15,15v193.24H49.264z M303.54,322.804H111.916V87.282H303.54V322.804
            z"/>
        </g>
        </svg>
            </button>
        </div> 
        <div class="px-8">
        <div class="divider"></div> 
        <p class="leading-7 mt-6 mb-6 text-indigo-600 ">Leggi anche...</p>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
        <div 
            v-for="randomCase in randomCases" 
            :key="randomCase.id" 
            class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4 cursor-pointer" 
            @click="$inertia.visit(route('articles.show', randomCase.id))"
        >
        <img v-if="randomCase.media" :src="'/storage/' + randomCase.media.filepath" class="h-32 w-full object-cover rounded-xl" alt="Article Image" />
        <div>
            <h4 class="text-lg font-bold">{{ randomCase.title }}</h4>
            <p class="mt-1">{{ randomCase.extract }}</p>
        </div>
        </div>
        </div>
        </div>
        </div>
    
        <div >
      <!-- Form laterale -->
      <div style="height: 600px;" class="bg-neutral-content p-4 my-4 me-4 rounded-lg shadow-lg " >
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
    import { ref } from 'vue';
    
    const currentArticleUrl = ref(window.location.href);
    
    
    
    const copyLinkToClipboard = () => {
    navigator.clipboard.writeText(currentArticleUrl.value)
        .then(() => alert('Indirizzo copiato!'))
        .catch(err => alert('Could not copy text: ', err));
    };
    </script>
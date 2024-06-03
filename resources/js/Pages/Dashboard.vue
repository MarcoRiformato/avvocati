<template>
<!--
<AppLayout title="Consulenza legale in appalti pubblici">
<div class="bg-base-200 overflow-hidden">
  <div class="relative isolate">


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
      <a href="tel:+39010541259" class="btn btn-primary">Chiama subito</a>
    </div>
  </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
  </div>


  <div class="container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="md:col-span-2 space-y-6">
        
        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.appalti'))" >
          <div class="md:w-1/3 hide-image hide-image">
            <img class="object-cover w-full h-48" src="https://www.bcmlawyers.com/wp-content/uploads/2012/09/contract-law.jpg" alt="Diritto di Famiglia">
          </div>
          <div class="px-4">
            <h3 class="text-lg font-semibold text-primary">Appalti pubblici e privati</h3>
            <p class="mt-2">              
              Gestiamo contenziosi su atti di gara e aggiudicazioni davanti a Tribunali Amministrativi e Consiglio di Stato, offrendo consulenza per tutte le fasi di gara e esecuzione di appalti e concessioni. Supportiamo i clienti alla redazione di documenti, assistenza contrattuale, e consulenza su Partenariato Pubblico Privato e procedure ANAC.
            </p>
            <button class="btn btn-primary mt-2" @click="$inertia.visit(route('services.appalti'))">Assistenza legale per appalti pubblici e privati</button>
          </div>
        </div>

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden py-5" @click="$inertia.visit(route('services.difesa'))">
          <div class="md:w-1/3 hide-image">
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

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.controversie'))">
          <div class="md:w-1/3 hide-image">
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

        <div class="flex bg-neutral-content flex-col md:flex-row rounded-lg shadow-lg overflow-hidden" @click="$inertia.visit(route('services.partenariato'))">
          <div class="md:w-1/3 hide-image">
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
      <div style="height: 600px;" class="bg-neutral-content p-4 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4 text-info">Se desideri un parere o hai bisogno di assistenza legale, contattaci!</h2>
        <p class="mb-4">Telefona al n. <strong>010 541259</strong> oppure compila il form</p>
        <form class="space-y-4" @submit.prevent="sendEmail">
          <div>
            <label for="name" class="block text-sm font-bold">Nome</label>
            <input type="text" id="name" v-model="name" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo nome">
          </div>
          <div>
            <label for="surname" class="block text-sm font-bold">Cognome</label>
            <input type="text" id="surname" v-model="surname" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo cognome">
          </div>
          <div>
            <label for="email" class="block text-sm font-bold">Email</label>
            <input type="email" id="email" v-model="email" class="w-full p-2 rounded border border-gray-600" placeholder="La tua email">
          </div>
          <div>
            <label for="message" class="block text-sm font-bold">Messaggio</label>
            <textarea id="message" v-model="message" rows="4" class="w-full p-2 rounded border border-gray-600" placeholder="Il tuo messaggio"></textarea>
          </div>
          <button type="submit" class="w-full btn-primary text-white font-bold py-2 px-4 rounded">
            Richiedi informazioni
          </button>
        </form>
      </div>
    </div>
  </div>

  
  <div class="mx-auto max-w-7xl px-6 sm:mt-8 lg:px-8 py-8">
    <h2 class="text-center text-lg font-semibold leading-8 text-secondary">Abbiamo collaborato con</h2>
    <div class="mx-auto mt-2 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4 bg-white p-4 rounded-md">
      <img class="col-span-2 w-full lg:col-span-1 max-h-20" style="object-fit: cover; object-position: center;" src="https://www.genovabluedistrict.com/wp-content/uploads/2021/06/loghi-UniGe-v1.jpg" />
      <img class="col-span-2 w-full lg:col-span-1 max-h-20" style="object-fit: contain; object-position: center;" src="https://yt3.googleusercontent.com/ytc/AIdro_kvzMZlgrwXZuQfbxRMdmvukOyWgl_tcl9arl2Sgw=s900-c-k-c0x00ffffff-no-rj" />
      <img class="col-span-2 max-h-20 w-full object-contain lg:col-span-1" src="https://www.federarchitetti.it/wp-content/uploads/2015/10/logo_Federarchitetti-scaled.jpg"/>
      <img class="col-span-2 max-h-20 w-full object-contain sm:col-start-2 lg:col-span-1" src="AAAL.jpg" />
    </div>
  </div>
-->
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

  <!--Testimonials
  <div class="py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-xl text-center">
        <p class="mt-2 text-3xl font-bold tracking-tight sm:text-4xl text-primary">I nostri assistiti</p>
      </div>
      <div class="mx-auto mt-8 flow-root max-w-2xl lg:mx-0 lg:max-w-none">
        <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
          <div v-for="testimonial in testimonials" :key="testimonial.id" class="pt-8 sm:inline-block sm:w-full sm:px-4">
            <figure class="rounded-2xl bg-base-300 p-8 text-sm leading-6">
              <blockquote>
                <p v-html="testimonial.body"></p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <div>
                  <div class="italic">{{ `${testimonial.organization}` }}</div>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>-->

<!--Blog section
<div class="py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">Notizie & aggiornamenti</h2>
    </div>
    <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
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
</div>-->
<!-- 
</div>
</div>
</AppLayout>
-->
<!-- Lavori in corso -->
<div class="w-full h-screen flex flex-col items-center justify-between">
    <div class="xl:w-1/2 flex-1 flex flex-col items-center justify-center text-center px-4 lg:px-0">
        <svg class="w-3/4" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 945 583.2243" xmlns:xlink="http://www.w3.org/1999/xlink"><path id="b0cf38c7-358d-48dc-a444-e9782686dfa5-94" data-name="Path 438" d="M222.88482,693.5243a24.21463,24.21463,0,0,0,23.38269-4.11877c8.18977-6.87442,10.758-18.196,12.84671-28.68191l6.17972-31.01657-12.93769,8.90836c-9.30465,6.40641-18.81827,13.01866-25.26012,22.29785s-9.25222,21.94708-4.07792,31.988" transform="translate(-127.5 -158.38785)" fill="#e6e6e6"></path><path id="acbbaa8b-0bc2-4bc9-96d7-93dd88f90f19-95" data-name="Path 439" d="M224.88254,733.23486c-1.6284-11.86369-3.30382-23.88079-2.15885-35.87167,1.01467-10.64933,4.26374-21.04881,10.87831-29.57938a49.20592,49.20592,0,0,1,12.62466-11.44039c1.26216-.79648,2.4241,1.20354,1.16733,1.997A46.77938,46.77938,0,0,0,228.88954,680.666c-4.02858,10.24607-4.67546,21.41582-3.98154,32.30029.41943,6.58218,1.31074,13.12121,2.20587,19.65252a1.19817,1.19817,0,0,1-.808,1.4225,1.16348,1.16348,0,0,1-1.42253-.808Z" transform="translate(-127.5 -158.38785)" fill="#f2f2f2"></path><path id="bed63620-84ae-4c66-a7c8-0d9b30f8c1e7-96" data-name="Path 442" d="M236.60356,714.19841A17.82515,17.82515,0,0,0,252.135,722.217c7.8644-.37318,14.41806-5.85972,20.31713-11.07026l17.452-15.40881-11.54988-.5528c-8.30619-.39784-16.82672-.771-24.73813,1.79338s-15.20758,8.72639-16.654,16.9154" transform="translate(-127.5 -158.38785)" fill="#e6e6e6"></path><path id="fc4eb8ca-daad-4589-b224-2c71eec1c546-97" data-name="Path 443" d="M220.27955,740.05454c7.83972-13.87142,16.93235-29.28794,33.1808-34.21551A37.02589,37.02589,0,0,1,267.4158,704.398c1.4819.128,1.1118,2.41174-.367,2.28454a34.39824,34.39824,0,0,0-22.27164,5.89215c-6.27994,4.27453-11.16975,10.21755-15.30781,16.51907-2.5351,3.8605-4.80576,7.88445-7.07642,11.903C221.66738,742.28125,219.54555,741.35371,220.27955,740.05454Z" transform="translate(-127.5 -158.38785)" fill="#f2f2f2"></path><path id="ec83fa9a-7bb4-4b90-a90b-e1cec4444963-98" data-name="Path 442" d="M1008.35714,710.03894a17.82515,17.82515,0,0,1-17.065,3.78282c-7.50783-2.37076-12.4416-9.35006-16.813-15.89522l-12.93426-19.3574,11.30757,2.41744c8.132,1.73826,16.46493,3.55513,23.45819,8.05635s12.47224,12.32329,11.77771,20.61" transform="translate(-127.5 -158.38785)" fill="#e6e6e6"></path><path id="e32935a9-e392-46b4-9a67-68c65f1cc9fa-99" data-name="Path 443" d="M1017.53074,739.20841c-4.03412-15.41439-8.88464-32.64277-23.33408-41.55944a37.026,37.026,0,0,0-13.12367-4.9599c-1.46539-.255-1.69126,2.04749-.22905,2.30247a34.39822,34.39822,0,0,1,20.02606,11.3886c4.9789,5.73758,8.18741,12.733,10.57751,19.88279,1.46425,4.38021,2.63106,8.85084,3.79926,13.31624C1015.61991,741.00647,1017.90833,740.652,1017.53074,739.20841Z" transform="translate(-127.5 -158.38785)" fill="#f2f2f2"></path><path d="M858.65906,513.48057H594.33494a7.97081,7.97081,0,0,1-7.96157-7.96157V416.34942a7.97081,7.97081,0,0,1,7.96157-7.96157H858.65906a7.9707,7.9707,0,0,1,7.96157,7.96157V505.519A7.9707,7.9707,0,0,1,858.65906,513.48057Z" transform="translate(-127.5 -158.38785)" fill="#f1f1f1"></path><rect x="500.27353" y="273.88471" width="70.06181" height="7.96157" fill="#18185a"></rect><circle cx="662.68956" cy="278.66165" r="4.77694" fill="#18185a"></circle><circle cx="678.6127" cy="278.66165" r="4.77694" fill="#18185a"></circle><circle cx="694.53583" cy="278.66165" r="4.77694" fill="#18185a"></circle><path d="M858.65906,626.53486H594.33494a7.97081,7.97081,0,0,1-7.96157-7.96157V529.40371a7.97081,7.97081,0,0,1,7.96157-7.96157H858.65906a7.9707,7.9707,0,0,1,7.96157,7.96157v89.16958A7.9707,7.9707,0,0,1,858.65906,626.53486Z" transform="translate(-127.5 -158.38785)" fill="#f1f1f1"></path><rect x="500.27353" y="386.939" width="70.06181" height="7.96157" fill="#18185a"></rect><circle cx="662.68956" cy="391.71594" r="4.77694" fill="#18185a"></circle><circle cx="678.6127" cy="391.71594" r="4.77694" fill="#18185a"></circle><circle cx="694.53583" cy="391.71594" r="4.77694" fill="#18185a"></circle><path d="M858.65906,739.58915H594.33494a7.97081,7.97081,0,0,1-7.96157-7.96156V642.458a7.97081,7.97081,0,0,1,7.96157-7.96157H858.65906a7.9707,7.9707,0,0,1,7.96157,7.96157v89.16959A7.97069,7.97069,0,0,1,858.65906,739.58915Z" transform="translate(-127.5 -158.38785)" fill="#f1f1f1"></path><rect x="500.27353" y="499.99329" width="70.06181" height="7.96157" fill="#18185a"></rect><circle cx="662.68956" cy="504.77024" r="4.77694" fill="#18185a"></circle><circle cx="678.6127" cy="504.77024" r="4.77694" fill="#18185a"></circle><circle cx="694.53583" cy="504.77024" r="4.77694" fill="#18185a"></circle><path d="M759.01179,321.31453l-.29232-.216-.007-.00528a3.57626,3.57626,0,0,0-5.00334.73888L694.21319,401.9379h-6.54562v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052h-3.90531a1.43056,1.43056,0,0,0-1.43052,1.43052v1.53783h-2.26034v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052h-3.9053a1.43057,1.43057,0,0,0-1.43053,1.43052v1.53783h-2.253v-1.53783a1.43057,1.43057,0,0,0-1.43053-1.43052h-3.9053a1.43056,1.43056,0,0,0-1.43052,1.43052v1.53783h-2.26034v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052H655.259a1.43057,1.43057,0,0,0-1.43053,1.43052v1.53783h-2.253v-1.53783a1.43057,1.43057,0,0,0-1.43053-1.43052h-3.9053a1.43034,1.43034,0,0,0-1.43052,1.43052v1.53783H642.5488v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052H637.213a1.43057,1.43057,0,0,0-1.43053,1.43052v1.53783h-2.26034v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052h-3.9053a1.43057,1.43057,0,0,0-1.43053,1.43052v1.53783h-2.253v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052h-3.9053a1.43057,1.43057,0,0,0-1.43053,1.43052v1.53783h-2.26034v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052h-3.9053a1.43057,1.43057,0,0,0-1.43053,1.43052v1.53783h-2.253v-1.53783a1.43056,1.43056,0,0,0-1.43052-1.43052h-3.90531a1.43056,1.43056,0,0,0-1.43052,1.43052v1.53783H596.858a3.57618,3.57618,0,0,0-3.57631,3.57631V408.926a3.57618,3.57618,0,0,0,3.57631,3.57631h96.76151a5.32944,5.32944,0,0,0,5.21778-4.24744l.037.02751L759.74521,326.325l.00559-.00707A3.57671,3.57671,0,0,0,759.01179,321.31453Z" transform="translate(-127.5 -158.38785)" fill="#3f3d56"></path><polygon points="255.504 550.825 267.523 556.976 296.966 513.544 279.228 504.466 255.504 550.825" fill="#ffb7b7"></polygon><path d="M381.94612,703.72021l23.66983,12.113.001.00049a16.94563,16.94563,0,0,1,7.3641,22.8037l-.25087.49017-38.75427-19.83265Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><polygon points="394.317 567.652 407.819 567.652 414.242 515.575 394.315 515.575 394.317 567.652" fill="#ffb7b7"></polygon><path d="M518.37323,721.632l26.58922-.00107h.00107a16.94563,16.94563,0,0,1,16.94473,16.94446v.55063l-43.53421.00162Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><path d="M458.66285,301.26058s-9.0412-6.9268-9.0412,9.99291l-1.42756,55.91271,15.94107,52.81966,9.27913-17.1307-3.80682-37.11652Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><path d="M555.37734,454.19165s10.48418,51.058-2.79579,92.95976l-7.33892,161.10695-26.90941-2.09684-9.43576-119.51969-9.0863-59.41037-18.87153,54.16828L418.73348,696.02681l-28.65677-22.36625s31.75629-86.64916,55.2167-104.84184l11.76615-134.011Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><circle cx="523.48018" cy="202.31369" r="30.68251" transform="translate(-32.63308 406.2144) rotate(-61.33685)" fill="#ffb7b7"></circle><path d="M521.30883,208.82157c3.67807.47856,6.45254-3.28467,7.73937-6.76336s2.2673-7.5286,5.46514-9.40772c4.36891-2.56725,9.95872.52048,14.95479-.32655,5.64211-.95654,9.31053-6.93607,9.598-12.65146s-1.987-11.21239-4.21862-16.48193l-.77911,6.54884a12.98679,12.98679,0,0,0-5.67512-11.35154l1.00419,9.60941A10.199,10.199,0,0,0,537.6641,159.558l.15814,5.72564c-6.51663-.77489-13.09021-1.55087-19.62615-.96052s-13.11751,2.65828-18.0712,6.96269c-7.40994,6.43874-10.11621,17.04088-9.20765,26.81529s4.94341,18.95675,9.14865,27.827c1.058,2.23177,2.52146,4.75016,4.97491,5.03445,2.20445.25544,4.22155-1.58732,4.90683-3.698a13.40422,13.40422,0,0,0-.0595-6.58474c-.62-3.2946-1.40155-6.6621-.81863-9.96346s2.9579-6.56372,6.28582-6.96831,6.73322,3.3994,5.13321,6.34537Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><polygon points="429.776 309.458 327.357 302.85 335.066 270.913 428.674 291.838 429.776 309.458" fill="#cbcbcb"></polygon><path d="M494.11389,244.15824l6.424-8.91878s7.18028,2.44014,26.40983,12.01183l1.35857,8.35615L561.685,460.9092,501.01375,458.292l-16.5219-.35153-5.4068-12.12-6.66725,11.86313-16.13421-.34328-16.41693-9.51706,16.179-49.48869,5.23438-45.206-8.0895-42.58883s-10.17937-39.10848,29.027-60.19538Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><path d="M630.86271,399.57305a10.48605,10.48605,0,0,1-13.04108-9.40577L581.82654,380.526l14.48005-12.85707,31.9616,11.12669a10.54289,10.54289,0,0,1,2.59452,20.77747Z" transform="translate(-127.5 -158.38785)" fill="#ffb7b7"></path><path d="M614.74112,394.13009a6.14221,6.14221,0,0,1-4.987.39563l-59.21317-22.47383a63.2273,63.2273,0,0,1-34.03214-28.68449l-24.6929-44.04893a19.76509,19.76509,0,1,1,29.49118-26.323L564.04672,340.737l53.7869,31.53448a6.15547,6.15547,0,0,1,2.61747,6.54608l-2.67464,11.33426a6.1431,6.1431,0,0,1-1.86626,3.15032A6.07364,6.07364,0,0,1,614.74112,394.13009Z" transform="translate(-127.5 -158.38785)" fill="#2f2e41"></path><path d="M1071.5,741.38785h-943a1,1,0,0,1,0-2h943a1,1,0,0,1,0,2Z" transform="translate(-127.5 -158.38785)" fill="#cbcbcb"></path></svg>
        <p class="text-4xl font-bold text-gray-700 capitalize tracking-wide mt-8">Sito in manutenzione!</p>
        <p class="text-xl text-gray-700 uppercase mt-4">Torneremo presto online</p>
    </div>
    <div class="w-full py-4 border-t border-gray-300">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center text-gray-600 text-sm md:space-x-8 space-y-1 md:space-y-0">
            <span class="font-bold">Potete contattarci a:</span>
            <a href="#" class="flex items-center space-x-1" target="_blank" title="Call">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span>+39 010 541259</span>
            </a>
            <a href="#" class="flex items-center space-x-1" target="_blank" title="Email">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                <span>segreteria@avvocatoinglese.it</span>
            </a>
        </div>
        
    </div>
</div>
</template>
    
<script setup>
import { ref, watch } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import AppLayout from '@/Layouts/AppLayout.vue';
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

const name = ref('');
const surname = ref('');
const email = ref('');
const message = ref('');

watch([name, surname, email, message], () => {
  console.log("Data:", name.value, surname.value, email.value, message.value);
}, { deep: true });

const sendEmail = () => {
  console.log("Sending Data:", name.value, surname.value, email.value, message.value);
  Inertia.post('/send-email', {
    name: name.value,
    surname: surname.value,
    email: email.value,
    message: message.value
  });
}

const posts = [
  {
    id: 1,
    title: 'Commodi placeat repudiandae placeat enim.',
    href: '#',
    description:
      'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
    imageUrl:
      'https://t3.ftcdn.net/jpg/04/45/40/12/360_F_445401212_PEDNESWvENUbesA25i8E42auVqffefxY.jpg',
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
      'https://t3.ftcdn.net/jpg/04/45/40/12/360_F_445401212_PEDNESWvENUbesA25i8E42auVqffefxY.jpg',
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
      'https://t3.ftcdn.net/jpg/04/45/40/12/360_F_445401212_PEDNESWvENUbesA25i8E42auVqffefxY.jpg',
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

/*function openCalendlyPopup(event) {
  event.preventDefault();
  Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}*/

const mobileMenuOpen = ref(false)
</script>
<style>

@media (max-width: 1024px) and (min-width: 768px) {
  .hide-image {
    display: none;
  }
}


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
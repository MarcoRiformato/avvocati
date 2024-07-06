<template>
  <div id="benvenuto" class="relative isolate overflow-hidden -mt-20 h-screen md:h-auto">
    <transition-group name="fade" tag="div">
      <img 
        v-for="(image, index) in images" 
        :key="image"
        :src="image" 
        :alt="`Studio legale image ${index + 1}`"
        class="absolute inset-0 -z-10 h-full w-full object-cover transition-opacity duration-1000 ease-in-out"
        :class="{ 'opacity-0': index !== currentIndex, 'opacity-100': index === currentIndex }"
      />
    </transition-group>
    <div class="absolute inset-0 bg-black opacity-50 -z-10"></div>
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
    <div class="mx-auto max-w-2xl py-24 md:py-48 h-full md:h-auto">
      <div class="text-center p-4 rounded md:text-left md:absolute md:inset-y-0 md:left-0 md:flex md:items-center md:w-1/2 md:p-8">
        <div>
          <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl mt-32 md:mt-0" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
            Studio legale<br/>Avv. Giuseppe Inglese
          </h1>
          <p class="mt-4 text-lg leading-8 text-gray-300" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">
            Diritto amministrativo & civile
          </p>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" />
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const images = ref([
  'segreteria.webp',
  'gruppo_seduto.jpeg',
  'sala_riunioni.jpeg'
]);

const currentIndex = ref(0);

const nextSlide = () => {
  currentIndex.value = (currentIndex.value + 1) % images.value.length;
};

let intervalId;

onMounted(() => {
  intervalId = setInterval(nextSlide, 5000);
});

onUnmounted(() => {
  clearInterval(intervalId);
});
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 1s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>
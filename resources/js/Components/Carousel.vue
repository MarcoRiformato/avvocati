<template>
    <div id="benvenuto" class="relative isolate overflow-hidden -mt-20 h-screen">
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
      <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent opacity-70 -z-10"></div>
      <div class="absolute inset-y-0 left-0 flex items-center w-full md:w-1/2 lg:w-2/5 p-8">
        <div class="text-left">
          <h1 class="mt-32 text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-4" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
            Studio legale<br/>Avv. Giuseppe Inglese
          </h1>
          <p class="text-lg md:text-xl leading-8 text-gray-300" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">
            Diritto amministrativo & civile
          </p>
        </div>
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
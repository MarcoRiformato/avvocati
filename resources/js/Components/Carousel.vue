<template>
  <div class="relative bg-gray-100 overflow-hidden">
    <!-- Mobile Layout -->
    <div class="md:hidden">
      <div class="bg-gray-800 text-white p-4 text-center">
        <h1 class="text-2xl font-bold">Studio legale<br/>Avv. Giuseppe Inglese</h1>
        <p class="text-sm mt-2">Diritto amministrativo & civile</p>
      </div>
      
      <div class="relative h-64 overflow-hidden">
        <transition-group name="fade" tag="div" class="h-full">
          <div 
            v-for="(image, index) in images" 
            :key="image"
            class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
            :class="{ 'opacity-0': index !== currentIndex, 'opacity-100': index === currentIndex }"
          >
            <img 
              :src="image" 
              :alt="`Studio legale image ${index + 1}`"
              class="w-full h-full object-cover object-center"
            />
          </div>
        </transition-group>
      </div>
      
      <div class="flex justify-center mt-2 mb-4">
        <button 
          v-for="(_, index) in images" 
          :key="index"
          @click="currentIndex = index"
          class="w-3 h-3 rounded-full mx-1 transition-colors duration-200 ease-in-out"
          :class="index === currentIndex ? 'bg-gray-800' : 'bg-gray-400'"
        ></button>
      </div>
      
      <div class="px-4 py-2">
        <a href="tel:010541259" class="block w-full bg-gray-800 text-white text-center py-3 rounded-lg font-bold text-lg">
          Chiamaci: 010 541259
        </a>
      </div>
    </div>

    <!-- Desktop Layout -->
    <div class="hidden md:flex md:h-[300px]">
      <!-- Image Section -->
      <div class="w-3/5 relative overflow-hidden">
        <transition-group name="fade" tag="div" class="h-full">
          <div 
            v-for="(image, index) in images" 
            :key="image"
            class="absolute inset-0 transition-opacity duration-1000 ease-in-out"
            :class="{ 'opacity-0': index !== currentIndex, 'opacity-100': index === currentIndex }"
          >
            <img 
              :src="image" 
              :alt="`Studio legale image ${index + 1}`"
              class="w-full h-full object-cover"
            />
          </div>
        </transition-group>
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
          <button 
            v-for="(_, index) in images" 
            :key="index"
            @click="currentIndex = index"
            class="w-3 h-3 rounded-full transition-colors duration-200 ease-in-out"
            :class="index === currentIndex ? 'bg-white' : 'bg-gray-400 hover:bg-gray-300'"
          ></button>
        </div>
      </div>
      
      <!-- Content Section -->
      <div class="w-2/5 bg-gray-800 text-white p-6 flex items-center justify-center">
        <div>
          <h1 class="text-3xl font-bold mb-3">Studio legale<br/>Avv. Giuseppe Inglese</h1>
          <p class="text-lg mb-4">Diritto amministrativo & civile</p>
          <p>
            <a href="tel:010541259" class="text-2xl font-bold hover:underline">010 541259</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const images = ref([
  'segreteria.webp',
  'gruppo_seduto.jpeg',
  'sala_riunioni.jpeg',
  'genova.webp',
  'genova2.webp',
  'genova3.webp'
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
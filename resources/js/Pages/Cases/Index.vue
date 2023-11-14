<template>
<AppLayout title="Indice casi studio">
  <div class="-mt-20 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:max-w-4xl">
        <h2 class="text-3xl font-bold tracking-tight  sm:text-4xl">Dal nostro blog</h2>
        <p class="mt-2 text-lg leading-8 ">Leggi le nostre ultime analisi in materia di diritto</p>
        <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
          <article v-for="caseItem in cases" :key="caseItem.id"
          @click="$inertia.visit(route('cases.show', caseItem.id))"
          class="relative isolate flex flex-col gap-8 lg:flex-row">
            <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
              <img  v-if="caseItem.media" :src="'/storage/' + caseItem.media.filepath" alt="" class="absolute inset-0 h-full w-full rounded-2xl object-cover" />
              <img v-else src="placeholder.webp" alt="" class="absolute inset-0 h-full w-full rounded-2xl object-cover" />
              <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10" />
              <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10" />
            </div>
            <div>
              <div class="flex items-center gap-x-4 text-xs">
                <time :datetime="caseItem.datetime" class="">{{ caseItem.date }}</time>
                <a href="" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium  hover:bg-gray-100">caseItem.category.title</a>
              </div>
              <div class="group relative max-w-xl">
                <h3 class="mt-3 text-lg font-semibold leading-6  group-hover:">
                  <a :href="caseItem.href">
                    <span class="absolute inset-0" />
                    {{ caseItem.title }}
                  </a>
                </h3>
                <p class="mt-5 text-sm leading-6 ">{{ caseItem.meta_description }}</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</AppLayout>
</template>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
  cases: Object
})

</script>
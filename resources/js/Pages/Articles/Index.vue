<template>
<AppLayout title="I nostri articoli">
  <div class="mt-4">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Dal nostro blog</h2>
        <p class="mt-2 text-lg leading-8 ">Mantieniti aggiornato con le ultime novità della legge</p>
      </div>
      <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article v-for="article in articles" :key="article.id" class="flex flex-col items-start justify-between"
        @click="$inertia.visit(route('articles.show', article.id))" 
        >
          <div class="relative w-full">
            <img v-if="article.media && article.media.length > 0" :src="'/storage/' + article.media[0].filepath" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" />
            <img v-else src="placeholder.webp" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]" />
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10" />
          </div>
          <div class="max-w-xl">
            <div class="mt-8 flex items-center gap-x-4 text-xs">
              <time class="">{{ formatDate(article.created_at) }}</time>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6">
                <a :href="article.href">
                  <span class="absolute inset-0" />
                  <p class="text-info">{{ article.title }}</p>
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6">{{ article.meta_description }}</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
  articles: Object
})

const formatDate = (dateString) => {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  const date = new Date(dateString);
  return date.toLocaleDateString('it-IT', options); // Italian format
};

</script>
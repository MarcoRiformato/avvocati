<template>
<AppLayout title="Gestisci categorie">
<AdminContainer>
<div class="min-h-full">
  <div class="mt-8 mb-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <button type="button" @click="$inertia.visit(route('admin.categories.create'))" class="btn btn-primary">Crea nuova categoria</button>
  </div>
  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 px-4">
    <li v-for="category in categories" :key="category.id" class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-gray-800 text-center shadow">
      <div class="flex flex-1 flex-col p-8" @click="$inertia.visit(route('admin.categories.show', article.id))">
        <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full" src="https://picsum.photos/400" alt="" />
        <h3 class="mt-6 font-medium text-info">{{ category.name }}</h3>
        <dl class="mt-1 flex flex-grow flex-col justify-between">
          <dd class="text-sm" v-html="category.description" ></dd>
          <dt class="sr-only">Role</dt>
          <dd class="mt-3">
            <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium ring-1 ring-inset ring-green-600/20">Testo</span>
          </dd>
        </dl>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="flex w-0 flex-1">
            <a @click.stop="$inertia.visit(route('admin.categories.edit', category.id))" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold">
              <EnvelopeIcon class="h-5 w-5" aria-hidden="true" />
              Modifica
            </a>
          </div>
          <div class="-ml-px flex w-0 flex-1">
            <a class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold">
              <PhoneIcon class="h-5 w-5" aria-hidden="true" />
              Apri
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
</AdminContainer>
</AppLayout>
</template>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdminContainer from '@/Pages/Admin/AdminContainer.vue';
import { EnvelopeIcon, PhoneIcon } from '@heroicons/vue/20/solid'

defineProps({
  categories: Object
})


</script>
<style>
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
<template>
<AppLayout title="Gestisci notizie">
<AdminContainer>
<div class="min-h-full">
    <div class="flex flex-1 flex-col">
        <div class=" px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <div class="flex-auto mb-4 sm:mb-0 mt-8">
                    <h1 class="text-4xl">Gestisci articoli</h1>
                </div>
                <div class="mt-8 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button" @click="$inertia.visit(route('admin.articles.create'))" class="btn btn-primary">Crea nuovo articolo</button>
                </div>
            </div>
            <div class="mt-2">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-0" style="max-width: 200px;">Titolo</th>
                            <th scope="col" class="hidden md:table-cell px-3 py-3.5 text-left text-sm font-semibold">Autore</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">Categoria</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">Data</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr :article="article" @click="$inertia.visit(route('articles.show', article.id))" v-for="article in articles" :key="article.id">
                            <td class="py-4 pl-4 pr-3 text-sm font-medium sm:pl-0 truncate" style="max-width: 200px;">
                                {{ article.title }}
                            </td>
                            <td class="hidden md:table-cell px-3 py-4 text-sm">
                                <div class="flex items-center">
                                    <div class="h-11 w-11 flex-shrink-0">
                                        <img class="rounded-full" :src="'https://picsum.photos/100'" />
                                    </div>
                                    <div class="ml-3">
                                        {{ article.user.name }}
                                    </div>
                                </div>
                            </td>
                            <td
                            v-if="article.category" 
                            class="px-3 py-4 text-sm">
                                {{ article.category.name }}
                            </td>
                            <td v-else class="px-3 py-4 text-sm">
                                Senza categoria
                            </td>
                            <td class="px-3 py-4 text-sm">
                                {{ new Date(article.created_at).toLocaleDateString() }}
                            </td>
                            <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <button @click.stop="$inertia.visit(route('admin.articles.edit', article.id))" class="btn btn-secondary">Modifica</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</AdminContainer>
</AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdminContainer from '@/Pages/Admin/AdminContainer.vue';

defineProps({
  articles: Object
})
</script>

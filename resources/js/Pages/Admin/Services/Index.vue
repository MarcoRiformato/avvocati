<template>
<AppLayout title="Gestisci notizie">
<AdminContainer>
  <div class="min-h-full">
    <div class="flex flex-1 flex-col">
        <div class=" px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <div class="flex-auto mb-4 sm:mb-0 mt-8">
                    <h1 class="text-4xl">Gestisci servizi</h1>
                </div>
                <div class="mt-8 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button" @click="$inertia.visit(route('admin.services.create'))" class="btn btn-primary">Crea nuovo servizio</button>
                </div>
            </div>
            <div class="mt-2">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-0" style="max-width: 200px;">Nome</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">Descrizione</th>
                            <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold">ID Categoria</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Modifica</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr :service="service" v-for="service in services" :key="service.id" @click="$inertia.visit(route('services.show', service.id))">
                            <td class="py-4 pl-4 pr-3 text-sm font-medium sm:pl-0 truncate" style="max-width: 200px;">
                                {{ service.title }}
                            </td>
                            <td class="py-4 pl-4 pr-3 text-sm font-medium sm:pl-0 truncate" style="max-width: 200px;">
                                {{ service.meta_description }}
                            </td>
                            <td class="py-4 pl-4 pr-3 text-sm text-center font-medium sm:pl-0 truncate" style="max-width: 200px;">
                                {{ service.category_id }}
                            </td>
                            <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <button @click.stop="$inertia.visit(route('admin.services.edit', service.id))" class="btn btn-secondary">Modifica</button>
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
  services: Object
})

</script>
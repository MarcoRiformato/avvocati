<template>
<AppLayout title="Gestisci testimonial">
<AdminContainer>

  <div class="min-h-full">
    <div class="flex flex-1 flex-col">
        <div class=" px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <div class="flex-auto mb-4 sm:mb-0 mt-8">
                    <h1 class="text-4xl">Gestisci testimonial</h1>
                </div>
                <div class="mt-8 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button" @click="$inertia.visit(route('admin.testimonials.create'))" class="btn btn-primary">Crea nuovo testimonial</button>
                </div>
            </div>
            <div class="mt-2">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-0" style="max-width: 200px;">Nome</th>
                            <th scope="col" class="hidden md:table-cell px-3 py-3.5 text-left text-sm font-semibold">Immagine</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">Testo</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold">Organizzazione</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Modifica</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr :testimonial="testimonial" v-for="testimonial in testimonials" :key="testimonial.id">
                            <td class="py-4 pl-4 pr-3 text-sm font-medium sm:pl-0 truncate" style="max-width: 200px;">
                                {{ testimonial.clientName }}
                            </td>
                            <td class="hidden md:table-cell px-3 py-4 text-sm">
                                <div class="flex items-center">
                                    <div class="h-11 w-11 flex-shrink-0">
                                        <img class="rounded-full" :src="'/storage/' + testimonial.filepath" />
                                    </div>
                                    <div class="ml-3">
                                        
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 py-4 text-sm">
                                {{ testimonial.body }}
                            </td>
                            <td
                            v-if="testimonial.organization" 
                            class="px-3 py-4 text-sm">
                                {{ testimonial.organization }}
                            </td>
                            <td v-else class="px-3 py-4 text-sm">
                                Senza organizzazione
                            </td>
                            <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <button @click.stop="$inertia.visit(route('admin.testimonials.edit', testimonial.id))" class="btn btn-secondary">Modifica</button>
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
  testimonials: Object
})

</script>
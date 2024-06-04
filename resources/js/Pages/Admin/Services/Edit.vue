<template>
    <AppLayout title="Modifica servizio">
    <AdminContainer>
        
        <div class="min-h-full">
        <h1 class="text-4xl p-4">Modifica servizio</h1>
        <form class="px-8 bg-base-200 pb-8" @submit.prevent="submit" enctype="multipart/form-data">
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
        
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <!-- Title & slug -->
                    <div class="sm:col-span-3">
                        <label for="title" class="block font-medium leading-6">Titolo</label>
                        <div class="mt-2">
                            <input v-model="form.title" type="text" placeholder="Scrivi il titolo" class=" input input-bordered input-primary  max-w-xs" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="title" class="block font-medium leading-6">Slug</label>
                        <div class="mt-2">
                            <input v-model="form.slug" type="text" placeholder="Scrivi il titolo" class=" input input-bordered input-primary  max-w-xs" />
                        </div>
                    </div>

                <!-- meta_description -->
                <div class="col-span-full">
                    <label for="body" class="block font-medium leading-6">Descrizione meta</label>
                    <div class="mt-2 bg-white/5 rounded-md">
                        <QuillEditor toolbar="minimal" v-model:content="form.meta_description" contentType="html" theme="snow" />
                    </div>
                </div>
        
                <!-- Body -->
                <div class="col-span-full">
                    <label for="body" class="block font-medium leading-6">Corpo</label>
                    <div class="mt-2 bg-white/5 rounded-md">
                        <QuillEditor toolbar="full" v-model:content="form.body" contentType="html" theme="snow" />
                    </div>
                </div>
        
                <!-- Status & Category -->
                <div class="sm:col-span-3">
                    <label for="status" class="block font-medium leading-6">Status</label>
                    <div class="mt-2">
                        <select v-model="form.status" class="input input-bordered input-primary w-full max-w-xs">
                            <option value="draft">In elaborazione</option>
                            <option value="published">Pubblicato</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="category_id" class="block font-medium leading-6">Categoria</label>
                    <div class="mt-2">
                        <select v-model="form.category_id" class="input input-bordered input-primary w-full max-w-xs">
                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                        </select>
                    </div>
                </div>
        
            </div>
            </div>
        
        </div>
        
        <div class="mt-6 flex items-center justify-between gap-x-6">
                <button @click="destroy" type="button" class="btn btn-error">Cancella</button>
                <button @click="$inertia.visit(route('admin.services.index'))" type="button" class="btn btn-secondary">Annulla</button>
                <button @click="submit" type="submit" :disabled="form.processing" class="btn btn-primary ">Salva</button>
            </div>
        </form>
        </div> 
</AdminContainer>
</AppLayout>
</template>
    
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdminContainer from '@/Pages/Admin/AdminContainer.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';


const props = defineProps({
    service: Object,
    categories: Array
});

let form = useForm({
    id: props.service.id,
    title: props.service.title,
    meta_description: props.service.meta_description,
    slug: props.service.slug,
    body: props.service.body,
    status: props.service.status,
    category_id: props.service.category_id,
});

const submit = () => {
    const formData = new FormData();
    formData.append('title', form.title);
    formData.append('meta_description', form.meta_description);
    formData.append('slug', form.slug);
    formData.append('body', form.body);
    formData.append('status', form.status);
    formData.append('category_id', form.category_id);

    console.log(form);
    form.post(route('admin.services.update', { id: props.service.id }), {
        body: formData
    });
};

const destroy = () =>{
        form.delete(route('admin.services.destroy', {id: props.service.id}));
}

</script>
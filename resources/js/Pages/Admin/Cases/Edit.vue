<template>
    <AppLayout title="Modifica caso studio">
    <AdminContainer>
    
    <div class="min-h-full">
    <h1 class="text-4xl p-4">Modifica caso studio</h1>
    <form class="px-8 bg-base-200 pb-8" @submit.prevent="submit" enctype="multipart/form-data">
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
    
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- Title & Image Upload -->
                <div class="sm:col-span-3">
                    <label for="title" class="block font-medium leading-6">Titolo</label>
                    <div class="mt-2">
                        <input v-model="form.title" type="text" placeholder="Scrivi il titolo" class=" input input-bordered input-primary  max-w-xs" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="cover-photo" class="block font-medium leading-6">Immagine</label>
                    <div class="text-center mt-2">
                        <!-- Show input only if there is no existing image and no uploaded preview -->
                        <input v-if="!props.case_study.media.length && !imagePreview" @change="handleFileChange" type="file" class="file-input file-input-bordered file-input-primary max-w-xs" />
                        
                        <!-- Display the existing image with a delete button -->
                        <div v-if="props.case_study.media.length">
                            <img :src="'/storage/' + props.case_study.media[0].filepath" alt="Existing Image" class="mt-4 w-full h-auto" />
                            <button type="button" @click="deleteImage" class="btn btn-error mt-2">X</button>
                        </div>

                        
                        <!-- Display the uploaded preview with a delete button -->
                        <div v-if="imagePreview">
                            <img :src="imagePreview" alt="Uploaded Preview" class="mt-4 w-full h-auto" />
                            <button @click="deletePreview" class="btn btn-error mt-2">X</button>
                        </div>
                    </div>
                </div>
    
    
            <!-- Meta Description -->
            <div class="col-span-full">
                <label for="meta_description" class="block font-medium leading-6">Descrizione meta</label>
                <div class="mt-2">
                    <textarea v-model="form.meta_description" rows="3" class="block w-full textarea textarea-primary"></textarea>
                </div>
            </div>
    
            <!-- Slug -->
            <div class="col-span-full">
                <label for="slug" class="block font-medium leading-6">Slug</label>
                <div class="mt-2">
                    <input v-model="form.slug" type="text" placeholder="Enter unique slug" class="input input-bordered input-primary w-full max-w-xs" />
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
            <button @click="$inertia.visit(route('admin.cases.index'))" type="button" class="btn btn-secondary">Annulla</button>
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
        case_study: Object,
        categories: Object
    });
    
    let form = useForm({
        id: props.case_study.id,
        title: props.case_study.title,
        meta_description: props.case_study.meta_description,
        slug: props.case_study.slug,
        body: props.case_study.body,
        status: props.case_study.status,
        category_id: props.case_study.category_id,
        media_file: null
    });
    
    const imagePreview = ref(null);
    const deletePreview = () => {
        imagePreview.value = null;
        form.media_file = null;
    };
    
    const deleteImage = () => {
        let caseId = props.case_study.id;
        console.log(caseId);
    
        try {
        Inertia.delete(route('admin.cases.destroy.image', { case_study: caseId }));
        } catch (error) {
            console.error("Error deleting image:", error);
        }
    
    };    
    
    const handleFileChange = (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.value = e.target.result;
            };
            reader.readAsDataURL(file);
            form.media_file = file;
        }
    };
    
    const submit = () => {
        const formData = new FormData();
        formData.append('title', form.title);
        formData.append('meta_description', form.meta_description);
        formData.append('slug', form.slug);
        formData.append('body', form.body);
        formData.append('status', form.status);
        formData.append('category_id', form.category_id);
    
        if (form.media_file) {
            formData.append('media_file', form.media_file);
        }
    
        form.post(route('admin.cases.update', { id: props.case_study.id }), {
            body: formData
        });
    };
    
    const destroy = () =>{
            form.delete(route('admin.cases.destroy', {id: props.case_study.id}));
    }
    
    </script>
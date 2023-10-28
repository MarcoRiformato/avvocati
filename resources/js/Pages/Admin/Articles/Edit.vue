<template>
<AppLayout title="Modifica articolo">
<AdminContainer>

<div class="min-h-full">
<h1 class="text-4xl p-4">Modifica articolo</h1>
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
                    <input v-if="!props.article.media.length && !imagePreview" @change="handleFileChange" type="file" class="file-input file-input-bordered file-input-primary max-w-xs" />
                    
                    <!-- Display the existing image with a delete button -->
                    <div v-if="props.article.media && props.article.media[0]">
                        <img :src="'/storage/' + props.article.media[0].filepath" alt="Existing Image" class="mt-4 w-full h-auto" />
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
            <label for="body" class="block font-medium leading-6">Articolo</label>
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
        <button @click="$inertia.visit(route('admin.articles.index'))" type="button" class="btn btn-secondary">Annulla</button>
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
    article: Object,
    categories: Array 
});

let form = useForm({
    id: props.article.id,
    title: props.article.title,
    meta_description: props.article.meta_description,
    slug: props.article.slug,
    body: props.article.body,
    status: props.article.status,
    category_id: props.article.category_id,
    media_file: null
});

const imagePreview = ref(null);
const deletePreview = () => {
    imagePreview.value = null;
    form.media_file = null;
};

const deleteImage = () => {
    let articleId = props.article.id;
    console.log(articleId);

    try {
    Inertia.delete(route('admin.articles.destroy.image', { article: articleId }));
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

    // You'll need to adjust this based on your actual API route
    form.post(route('admin.articles.update', { id: props.article.id }), {
        body: formData
    });
};

const destroy = () =>{
        form.delete(route('admin.articles.destroy', {id: props.article.id}));
    }

</script>
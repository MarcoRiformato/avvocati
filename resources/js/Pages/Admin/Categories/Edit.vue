<template>
<AppLayout title="Modifica categoria">
<AdminContainer>

    <div class="min-h-full">
    <h1 class="text-4xl p-4">Modifica categoria</h1>
    <form class="px-8 bg-base-200 pb-8" @submit.prevent="submit" enctype="multipart/form-data">
      <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- Title & Media File Upload -->
            <div class="sm:col-span-3">
              <label for="title" class="block font-medium leading-6">Nome</label>
              <div class="mt-2">
                <input v-model="form.name" type="text" placeholder="Scrivi il nome" class="input input-bordered input-primary max-w-xs" />
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="cover-photo" class="block font-medium leading-6">Immagine</label>
              <div class="text-center mt-2">
                  
                  <!-- Show input if no media object and no imagePreview -->
                  <input v-if="!props.category.media && !imagePreview" @change="handleFileChange" type="file" class="file-input file-input-bordered file-input-primary max-w-xs" />   

                  <!-- Display the existing image with a delete button -->
                  <div v-if="props.category.media">
                      <img :src="'/storage/' + props.category.media.filepath" alt="Existing Image" class="mt-4 w-full h-auto" />
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
              <label for="description" class="block font-medium leading-6">Corpo</label>
              <div class="mt-2 bg-white/5 rounded-md">
                <QuillEditor toolbar="full" v-model:content="form.description" contentType="html" theme="snow" />
              </div>
            </div>

            <!-- Status -->
            <div class="sm:col-span-3">
              <label for="status" class="block font-medium leading-6">Status</label>
              <div class="mt-2">
                <select v-model="form.status" class="input input-bordered input-primary w-full max-w-xs">
                  <option value="draft">Bozza</option>
                  <option value="published">Pubblicato</option>
                </select>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-between gap-x-6">
        <button @click="destroy" type="button" class="btn btn-error">Cancella</button>
        <button @click="$inertia.visit(route('admin.categories.index'))" type="button" class="btn btn-secondary">Annulla</button>
        <button @click="submit" type="submit" :disabled="form.processing" class="btn btn-primary">Salva</button>
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

const props = defineProps({
    category: Object,
});

let form = useForm({
    id: props.category.id,
    name: props.category.name,
    description: props.category.description,
    meta_description: props.category.meta_description,
    slug: props.category.slug,
    status: props.category.status,
    category_id: props.category.category_id,
    media_file: null 
});

const imagePreview = ref(null);
const deletePreview = () => {
    imagePreview.value = null;
    form.media_file = null;
};

const deleteImage = () => {
    let categoryId = props.category.id;
    console.log(categoryId);

    try {
        Inertia.delete(route('admin.categories.destroy.image', { category: categoryId }));
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
    formData.append('description', form.description);
    formData.append('meta_description', form.meta_description);
    formData.append('slug', form.slug);
    formData.append('body', form.body);
    formData.append('status', form.status);
    formData.append('category_id', form.category_id);
    formData.append('media_file', form.media_file); // New field

    // Adjust this based on your actual API route for categories
    form.post(route('admin.categories.update', { id: props.category.id }), {
        body: formData
    });
};

const destroy = () => {
    form.delete(route('admin.categories.destroy', { id: props.category.id }));
}
</script>

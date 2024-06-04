<template>
<AppLayout title="Modifica caso studio">
<AdminContainer>
    
    <div class="min-h-full">
    <h1 class="text-4xl p-4">Modifica testimonial</h1>
    <form class="px-8 bg-base-200 pb-8" @submit.prevent="submit" enctype="multipart/form-data">
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
    
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- Title & Image Upload -->
                <div class="sm:col-span-3">
                    <label for="title" class="block font-medium leading-6">Nome</label>
                    <div class="mt-2">
                        <input v-model="form.clientName" type="text" placeholder="Scrivi il titolo" class=" input input-bordered input-primary  max-w-xs" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="cover-photo" class="block font-medium leading-6">Immagine</label>
                    <div class="text-center mt-2">
                        <!-- Show input only if there is no existing image and no uploaded preview -->
                        <input v-if="!props.testimonial.filepath && !imagePreview" @change="handleFileChange" type="file" class="file-input file-input-bordered file-input-primary max-w-xs" />
                        
                        <!-- Display the existing image with a delete button -->
                        <div v-if="props.testimonial.filepath">
                            <img :src="'/storage/' + props.testimonial.filepath" alt="Existing Image" class="mt-4 w-full h-auto" />
                            <button type="button" @click="deleteImage" class="btn btn-error mt-2">X</button>
                        </div>
                        
                        <!-- Display the uploaded preview with a delete button -->
                        <div v-if="imagePreview">
                            <img :src="imagePreview" alt="Uploaded Preview" class="mt-4 w-full h-auto" />
                            <button @click="deletePreview" class="btn btn-error mt-2">X</button>
                        </div>
                    </div>
                </div>
    
            <!-- Body -->
            <div class="col-span-full">
                <label for="body" class="block font-medium leading-6">Corpo</label>
                <div class="mt-2 bg-white/5 rounded-md">
                    <QuillEditor toolbar="full" v-model:content="form.body" contentType="html" theme="snow" />
                </div>
            </div>
    
    
            <!-- Organizzazione -->
            <div class="col-span-full">
                <label for="slug" class="block font-medium leading-6">Azienda / Organizzazione</label>
                <div class="mt-2">
                    <input v-model="form.organization" type="text" placeholder="Enter unique slug" class="input input-bordered input-primary w-full max-w-xs" />
                </div>
            </div>
    
        </div>
        </div>
    
    </div>
    
    <div class="mt-6 flex items-center justify-between gap-x-6">
            <button @click="destroy" type="button" class="btn btn-error">Cancella</button>
            <button @click="$inertia.visit(route('admin.testimonials.index'))" type="button" class="btn btn-secondary">Annulla</button>
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
    testimonial: Object
});

let form = useForm({
    id: props.testimonial.id,
    clientName: props.testimonial.clientName,
    organization: props.testimonial.organization,
    body: props.testimonial.body,
    filepath: null
});

const imagePreview = ref(null);
const deletePreview = () => {
    imagePreview.value = null;
    form.filepath = null;
};

const deleteImage = () => {
    let caseId = props.testimonial.id;
    console.log(caseId);

    try {
    Inertia.delete(route('admin.testimonials.destroy.image', { testimonial: caseId }));
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
        form.filepath = file;
    }
};

const submit = () => {
    const formData = new FormData();
    formData.append('clientName', form.clientName);
    formData.append('body', form.body);
    formData.append('organization', form.organization);

    if (form.filepath) {
        formData.append('filepath', form.filepath);
    }
    console.log(form);
    form.post(route('admin.testimonials.update', { id: props.testimonial.id }), {
        body: formData
    });
};

const destroy = () =>{
        form.delete(route('admin.testimonials.destroy', {id: props.testimonial.id}));
}

</script>
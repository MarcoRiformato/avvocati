<template>
    <AppLayout title="Crea nuovo testimonial">
    <AdminContainer>
    <div class="min-h-full">
    <h1 class="text-4xl p-4">Crea nuovo testimonial</h1>
    <form class="px-8 bg-base-200 pb-8" @submit.prevent="submit" enctype="multipart/form-data">
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
    
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- clientName & Image Upload -->
                <div class="sm:col-span-3">
                    <label for="clientName" class="block font-medium leading-6">Nome</label>
                    <div class="mt-2">
                        <input v-model="form.clientName" type="text" placeholder="Scrivi il titolo" class=" input input-bordered input-primary  max-w-xs" />
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="cover-photo" class="block font-medium leading-6">Immagine</label>
                    <div class="text-center mt-2">
                        <input @change="handleFileChange" type="file" class="file-input file-input-bordered file-input-primary  max-w-xs" />
                        <img v-if="imagePreview" :src="imagePreview" alt="Uploaded Preview" class="mt-4 w-full h-auto" />
                    </div>
                </div>

    
            <!-- Body -->
            <div class="col-span-full">
                <label for="body" class="block font-medium leading-6">Articolo</label>
                <div class="mt-2 bg-white/5 rounded-md">
                    <QuillEditor toolbar="full" v-model:content="form.body" contentType="html" theme="snow" />
                </div>
            </div>
    
            <!-- Organizzazione -->
            <div class="col-span-full">
                <label for="organization" class="block font-medium leading-6">Slug</label>
                <div class="mt-2">
                    <input v-model="form.organization" type="text" placeholder="Enter unique organization" class="input input-bordered input-primary w-full max-w-xs" />
                </div>
            </div>
    
        </div>
        </div>
    
    </div>
    
    <div class="mt-6 flex items-center justify-between gap-x-6">
        <button @click="$inertia.visit(route('admin.testimonials.index'))" type="button" class="btn btn-secondary">Cancel</button>
        <button @click="submit" type="button" :disabled="form.processing" class="btn btn-primary">Save</button>
    </div>
    </form>
    </div>
    </AdminContainer>
    </AppLayout>
    </template>
    <script setup>
    import { useForm } from '@inertiajs/vue3';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import AdminContainer from '@/Pages/Admin/AdminContainer.vue';
    import { ref } from 'vue';
    import { Inertia } from '@inertiajs/inertia';

    const imagePreview = ref(null);
    const handleFileChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.value = e.target.result; // Set the image preview
        };
        reader.readAsDataURL(file);
        form.media_file = file; // Set the media_file to be the uploaded file
        }
    };
    
    
    let form = useForm({
        clientName: '',
        organization: '',
        body: '',
        media_file: null
    })
    
    const submit = () => {
    // Check if the method is called
    console.log('Submit method called');

    try {
        const formData = new FormData();
        formData.append('clientName', form.clientName);
        formData.append('organization', form.organization);
        formData.append('body', form.body);

        if (form.media_file) {
            formData.append('filepath', form.media_file);
        }

        // Log each form data key-value pair
        console.log('FormData contents:');
        for (let [key, value] of formData.entries()) {
            console.log(`${key}:`, value);
        }

        // Submit the form data using Inertia
        Inertia.post(route('admin.testimonials.store'), formData, {
            forceFormData: true, // Tell Inertia to send the request as `multipart/form-data`
            onSuccess: () => {
                console.log('Form submitted successfully');
                form.reset(); // Reset the form after successful submission
            },
            onError: (errors) => {
                console.error('Form submission errors:', errors);
            }
        });
    } catch (error) {
        console.error('Error in the submit method:', error);
    }
};


    
    
    </script>
    
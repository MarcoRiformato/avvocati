<template>
    <h1>Show article</h1>
    <p>{{ article }}</p>
</template>

<script setup>
defineProps({
  article: Object
})

</script>
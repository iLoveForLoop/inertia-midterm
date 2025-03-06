<script setup>
defineProps({
    name: String,
    course: String,
    year: String,
})
</script>

<template>
    <div class=" shadow-lg p-15 bg-cyan-100 rounded flex flex-col items-center justify-center gap-6">
        <h1 class="text-5xl uppercase">{{ name }}</h1>
        <h1 class="text-5xl uppercase">{{ course }} - {{ year }}</h1>
    </div>
</template>

<style></style>

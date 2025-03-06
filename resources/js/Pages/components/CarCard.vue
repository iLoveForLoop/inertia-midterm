<script setup>
defineProps({
    car: Object,
});
</script>

<template>
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
        <h2 class="text-lg font-semibold text-gray-800">
            {{ car.make }} {{ car.model }}
        </h2>
        <p class="text-sm text-gray-600">Year: {{ car.year }}</p>
        <p class="text-sm text-gray-600">Miles: {{ car.miles.toLocaleString() }}</p>
    </div>
</template>

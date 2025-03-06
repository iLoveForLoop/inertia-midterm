<script setup>
defineProps({
    bidder: Object,
});
</script>

<template>
    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
        <h2 class="text-lg font-semibold text-gray-800">
            {{ bidder.first_name }} {{ bidder.last_name }}
        </h2>
        <p class="text-sm text-gray-600">Address: {{ bidder.address }}</p>
        <p class="text-sm text-gray-600">Email: {{ bidder.email }}</p>
    </div>
</template>

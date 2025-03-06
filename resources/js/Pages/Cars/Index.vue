<script setup>
import { computed, ref } from 'vue';
import MainLayout from '../Layouts/MainLayout.vue';
import CarCard from '../components/CarCard.vue'

const props = defineProps({
    cars: Array,
});

const filter = ref('');

const filteredCars = computed(() => {
    if (!filter.value) return props.cars;

    return props.cars.filter(car =>
        car.make.toLowerCase().includes(filter.value.toLowerCase()) ||
        car.model.toLowerCase().includes(filter.value.toLowerCase())
    );
});
</script>

<template>
    <MainLayout>

        <div class="w-full bg-gray-100 p-4 flex justify-between items-center border-b border-gray-200">
            <h1 class="text-xl font-semibold text-gray-800">Cars</h1>
            <input type="search" v-model="filter" placeholder="Search by make or model..."
                class="w-64 p-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" />
        </div>


        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <CarCard v-for="car in filteredCars" :key="car.id" :car="car" />
            <p v-if="filteredCars.length === 0" class="col-span-full text-center text-gray-500">
                No cars found.
            </p>
        </div>
    </MainLayout>
</template>

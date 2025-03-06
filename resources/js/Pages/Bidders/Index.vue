<script setup>
import { computed, ref } from 'vue';
import MainLayout from '../Layouts/MainLayout.vue';
import BidderCard from '../components/BidderCard.vue'

const props = defineProps({
    bidders: Array,
});

const showBidders = ref(props.bidders);
const filter = ref('');

const filteredBidders = computed(() => {
    if (!filter.value) return props.bidders;

    return props.bidders.filter(bidder =>
        bidder.first_name.toLowerCase().includes(filter.value.toLowerCase()) ||
        bidder.last_name.toLowerCase().includes(filter.value.toLowerCase())
    );
});
</script>

<template>
    <MainLayout>

        <div class="w-full bg-gray-100 p-4 flex justify-between items-center border-b border-gray-200">
            <h1 class="text-xl font-semibold text-gray-800">Bidders</h1>
            <input type="search" v-model="filter" placeholder="Search by name..."
                class="w-64 p-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" />
        </div>


        <div class="p-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 [scrollbar-width:none]">
            <BidderCard v-for="bidder in filteredBidders" :key="bidder.bidder_id" :bidder="bidder" />
            <p v-if="filteredBidders.length === 0" class="col-span-full text-center text-gray-500">
                No bidders found.
            </p>
        </div>
    </MainLayout>
</template>

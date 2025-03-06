<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <nav class=" flex justify-between items-center px-8 py-4">
        <div>
            <h1 class="text-3xl text-cyan-500 uppercase">Midterm</h1>
        </div>

        <div class="flex gap-5 uppercase">
            <Link
                class="bg-cyan-200  py-1 px-3 rounded-md shadow-lg hover:scale-105 hover:shadow-black hover:shadow-xl transition-shadow"
                href="/">
            Home
            </Link>
            <Link
                class="bg-cyan-200  py-1 px-3 rounded-md shadow-lg hover:scale-105 hover:shadow-black hover:shadow-xl transition-shadow"
                href="/cars">
            Cars
            </Link>
            <Link
                class="bg-cyan-200  py-1 px-3 rounded-md shadow-lg hover:scale-105 hover:shadow-black hover:shadow-xl transition-shadow"
                href="/bidders">
            Bidders
            </Link>
        </div>
    </nav>

    <div>
        <slot />
    </div>
</template>


<style></style>

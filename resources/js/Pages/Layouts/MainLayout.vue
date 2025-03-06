<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <nav class="bg-cyan-100 flex justify-between items-center px-8 py-4">
        <div>
            <h1 class="text-3xl uppercase">Midterm</h1>
        </div>

        <div class="flex gap-5 uppercase">
            <Link href="/">
            Home
            </Link>
            <Link href="/cars">
            Cars
            </Link>
            <Link href="/bidders">
            Bidders
            </Link>
        </div>
    </nav>

    <div>
        <slot />
    </div>
</template>


<style></style>

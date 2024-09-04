<script setup>
import { Link, Head } from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>Dashboard Erat - Kopnuspos</title>
        <meta
            name="description"
            content="this appliaction using laravel inertia"
        />
    </Head>
    <div>
        <header class="bg-green-500 text-white">
            <nav
                class="flex items-center justify-between p-4 max-w-screen-lg mx-auto"
            >
                <div class="space-x-6">
                    <!-- <a href="/">Home</a>
                    <a href="/about">About</a> -->
                    <Link :href="route('home')">Home</Link>
                    <Link :href="route('about')">About</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>

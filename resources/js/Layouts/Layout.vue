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
        <header>
            <nav>
                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link">Home</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3";
import { useColumnStore } from "../Stores/columnStore";

const store = useColumnStore();
</script>

<template>
    <Head>
        <title>Dashboard Erat - Kopnuspos</title>
        <meta
            name="description"
            content="this appliaction using laravel inertia"
        />
    </Head>

    <div class="relative min-h-screen bg-gray-100">
        <!-- <header class="fixed w-full p-4 bg-white shadow-md">
            <nav class="px-4 mx-auto max-w-screen">
                <div class="flex items-center space-x-6">
                    <div class="home me-auto">
                        <Link :href="route('home')" class="text-sm font-medium"
                            >Home</Link
                        >
                    </div>

                    <svg
                        class="cursor-pointer"
                        @click="store.changeColumn(1)"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1z"
                        />
                    </svg>
                    <svg
                        class="cursor-pointer"
                        @click="store.changeColumn(2)"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1zm9-1v18"
                        />
                    </svg>

                    <svg
                        class="cursor-pointer"
                        @click="store.changeColumn(3)"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1zm6-1v18m6-18v18"
                        />
                    </svg>
                </div>
            </nav>
        </header> -->

        <header
            class="hidden w-full px-8 py-4 lg:flex lg:justify-between lg:items-center"
        >
            <img
                src="/public/images/logo.png"
                alt="Koperasi Nusantara"
                class="w-40"
            />

            <div class="flex gap-4">
                <svg
                    class="text-orange-600 cursor-pointer"
                    @click="store.changeColumn(1)"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                >
                    <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1z"
                    />
                </svg>
                <svg
                    class="text-orange-600 cursor-pointer"
                    @click="store.changeColumn(2)"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                >
                    <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1zm9-1v18"
                    />
                </svg>
                <svg
                    class="text-orange-600 cursor-pointer"
                    @click="store.changeColumn(3)"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                >
                    <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1zm6-1v18m6-18v18"
                    />
                </svg>
                <svg
                    class="w-[22px] h-[22px] text-orange-600 mt-[1px] cursor-pointer"
                    @click="store.changeColumn(4)"
                    width="27"
                    height="28"
                    viewBox="0 0 27 28"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M7 2V26M20 2V26M13.5 2V26M1.5 3.33333C1.5 2.97971 1.64048 2.64057 1.89052 2.39052C2.14057 2.14048 2.47971 2 2.83333 2H24.1667C24.5203 2 24.8594 2.14048 25.1095 2.39052C25.3595 2.64057 25.5 2.97971 25.5 3.33333V24.6667C25.5 25.0203 25.3595 25.3594 25.1095 25.6095C24.8594 25.8595 24.5203 26 24.1667 26H2.83333C2.47971 26 2.14057 25.8595 1.89052 25.6095C1.64048 25.3594 1.5 25.0203 1.5 24.6667V3.33333Z"
                        stroke="#ea580c"
                        stroke-width="2.66667"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
        </header>
        <main class="px-4 pb-4 mx-auto max-w-screen">
            <slot />
        </main>
    </div>
</template>

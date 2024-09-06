<script setup lang="ts">
import { useColumnStore } from "../Stores/columnStore";
import { currency } from "../Utils/currency";

const store = useColumnStore();

interface ItemType {
    name: string; // Gunakan 'string' (huruf kecil)
    type: string | null;
    value: any;
}

interface ItemsType {
    name: string; // Gunakan 'string' (huruf kecil)
    items: ItemType[];
}

interface DataType {
    name: string; // Gunakan 'string' (huruf kecil)
    description: string | null;
    data: Array<ItemsType>;
}

// Definisikan props langsung dengan tipe tanpa 'type' dan 'required'
const { items } = defineProps<{
    items: DataType[];
}>();
</script>

<template>
    <!-- <Head :title="$page.component"> -->
    <Head title="Kopnuspos">
        <meta head-key="description" name="description" content="Home Page" />
    </Head>

    <div class="w-full px-4 text-slate-700">
        <!-- <p>{{ store.column }}</p> -->
        <div class="flex flex-wrap items-stretch -mx-4">
            <div
                v-for="item in items"
                :key="item.name"
                class="w-full p-4 md:w-1/2 sm:w-1/2"
                :class="{
                    'lg:w-full': store.column == 1,
                    'lg:w-1/2': store.column == 2,
                    'lg:w-1/3': store.column == 3,
                    'lg:w-1/4': store.column == 4,
                }"
            >
                <div
                    class="flex flex-col items-stretch h-full bg-white border divide-y rounded-md shadow-md shadow-slate-200 border-slate-100"
                >
                    <h1 class="p-4 title" v-if="item.name">{{ item.name }}</h1>
                    <p v-if="item.description" class="p-4 italic font-light">
                        {{ item.description }}
                    </p>

                    <div
                        class="p-4 content-page"
                        v-for="subItems in item.data"
                        :key="subItems.name"
                        v-if="item.data"
                    >
                        <h5
                            class="mb-3 italic font-medium text-orange-500 text-capitalize"
                        >
                            {{ subItems.name }}
                        </h5>

                        <div
                            class="my-4 sub-content-page"
                            v-for="subItem in subItems.items"
                            :key="subItem.name"
                        >
                            <div
                                class="flex items-center justify-between gap-4"
                                v-if="subItem.type != 'progress'"
                            >
                                <p class="font-light">{{ subItem.name }}</p>
                                <p class="font-semibold">
                                    {{ currency(subItem.value) }}
                                </p>
                            </div>

                            <div v-else class="flex items-center gap-4">
                                <p class="w-3/12 font-light">
                                    {{ subItem.name }}
                                </p>

                                <div class="flex items-center w-9/12 gap-4">
                                    <div
                                        class="w-full h-6 bg-gray-200 rounded-md"
                                    >
                                        <div
                                            class="h-6 bg-orange-600 rounded-md"
                                            :style="{
                                                width: subItem.value + '%',
                                            }"
                                        ></div>
                                    </div>
                                    <p
                                        class="font-semibold text-normal"
                                        :class="{
                                            'text-red-600':
                                                parseInt(subItem.value) < 50,
                                            'text-green-600':
                                                parseInt(subItem.value) >= 50,
                                        }"
                                    >
                                        {{ subItem.value + "%" }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    user: String,
});
</script>

<template>
    <Head title="About">
        <meta
            head-key="description"
            name="description"
            content="ini halama About page"
        />
    </Head>
    <div class="mx-auto px-4">
        <div>ini menggunakan inertia</div>

        <p class="text-2xl">{{ $page.props.user }}</p>
        <p class="text-2xl">{{ $page.props[0].name }}</p>
        <p class="text-4xl">ABOUT</p>
    </div>
</template>

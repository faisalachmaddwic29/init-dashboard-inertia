<script setup>
// import demo from "../Layouts/demo.vue";

// defineOptions({ layout: demo });
</script>

<template>
    <Head :title="$page.component">
        <meta
            head-key="description"
            name="description"
            content="ini halama home page"
        />
    </Head>

    <div class="mx-auto px-4">
        <p>{{ $page.component }}</p>
        <p class="text-2xl">{{ $page.props[0].name }}</p>

        <div>ini menggunakan inertia</div>

        <p class="text-4xl">FAISAL</p>

        <Link class="mt-[1000px] block" :href="route('home')" preserve-scroll
            >Refresh</Link
        >
        <Link class="mt-[1000px] block" :href="route('home')"
            >Scroll to Top</Link
        >
    </div>
</template>

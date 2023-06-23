<script setup>
import Tweet from '@/Components/Tweet.vue';
import TwitterLayout from '@/Layouts/TwitterLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    tweets : Array,
    user : Object
});
</script>

<template>
    <Head title="Twitter" />

    <TwitterLayout :user="user">
        <div class="text-white" v-for="tweet in tweets" :key="tweet">
            <Tweet  :tweet="tweet" :user="user"/>
            <div class="border-b border-b-gray-800 mt-2">
            </div>
        </div>
    </TwitterLayout>
    
</template>



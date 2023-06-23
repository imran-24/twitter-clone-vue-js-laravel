<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex w-full mt-4 items-center px-4 py-3 justify-center text-sm bg-sky-500 border border-transparent rounded-md font-extrabold  text-white tracking-widest hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-600 focus:ring-offset-2 transition ease-in-out duration-150"
    >
        <slot />
    </button>
</template>

<script setup>
defineProps(['value']);
</script>

<template>
    <label class="block font-medium text-sm absolute text-gray-500">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>

<script setup>
import { onMounted, ref } from 'vue';

defineProps(['modelValue']);

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="border-0 border-b-2 font-medium border-b-gray-300 text-sm focus:border-0 focus:ring-0 focus:border-b-2 focus:ring-b-2 focus:border-indigo-500 focus:ring-indigo-500 pt-4  "
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>

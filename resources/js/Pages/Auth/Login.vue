<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <div class="pb-6">
            <p class="text-3xl text-gray-900 font-extralight text-center">Log in on Twitter </p>
        </div>
        <form @submit.prevent="submit">
            <div>
                <InputLabel id="label" for="email" value="Phone, email or username" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
            </PrimaryButton>
            
            <div class="flex items-center justify-center gap-3 mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="font-bold text-sm text-sky-500 hover:text-sky-400 rounded-md focus:outline-none"
                >
                    Forgot password?
                </Link>

                <Link
                    :href="route('register')"
                    class="font-semibold text-sm text-sky-500 hover:text-sky-400 rounded-md focus:outline-none"
                >
                    Sign up for Twitter
                </Link>

            </div>
            
        </form>
    </GuestLayout>
</template>


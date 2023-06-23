<template>
    <div class="w-full xl:inline-block xl:hover:bg-neutral-900/70 p-2 rounded-full transition duration-300 ease-in-out cursor-pointer">
        <div class="flex items-center">
            <img 
                v-if="iconString === 'Profile'"
                :class="{'mr-1' : iconString === 'Profile'}"
                class="rounded-full ml-[2px] w-[30px] cursor-pointer"
                :src="user.image"
            >
            <component :is="icon" v-else class="h-8 w-8 ml-[6px] text-white hover:text-sky-500 transition duration-150 ease-out" />
            <span class="lg:block hidden text-white font-extrabold text-[18px] pl-2 mt-0.5">
                {{ iconString }}
            </span>
        </div>
    </div>
</template>

<script setup>

import { toRefs } from 'vue';


import { HomeIcon } from '@heroicons/vue/24/outline'
import { HeartIcon } from '@heroicons/vue/24/outline'
import { PaperAirplaneIcon } from '@heroicons/vue/24/outline'
import { UserCircleIcon } from '@heroicons/vue/24/outline'
import { ArrowRightOnRectangleIcon } from '@heroicons/vue/24/outline'
import { PencilSquareIcon } from '@heroicons/vue/24/outline'
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline'
import { usePage } from '@inertiajs/vue3';


const props = defineProps({
    iconString: String,
    
})

defineEmits(['handleOnClick']);
const { iconString } = toRefs(props);

const user = usePage().props.auth.user

let icon = null

if (iconString.value === 'Home') icon = HomeIcon
if (iconString.value === 'Search') icon = MagnifyingGlassIcon
if (iconString.value === 'Explore') icon = PencilSquareIcon
if (iconString.value === 'Messages') icon = PaperAirplaneIcon
if (iconString.value === 'Notifications') icon = HeartIcon
if (iconString.value === 'Create') icon = PencilSquareIcon
if (iconString.value === 'Profile') icon = UserCircleIcon
if (iconString.value === 'Logout') icon = ArrowRightOnRectangleIcon


</script>


<script setup lang="ts">
import { Head, useForm, Link } from "@inertiajs/vue3";





const form = useForm({
    name: '',
    description: '',
});

const emit = defineEmits(['close']);

const submit = () => {
    form.post(route('categories.store'), {
        onSuccess: () => {
            form.reset();
            emit('close');
        }
    });
}
</script>

<template>
    <div class="fixed inset-0 bg-gray-300/50 flex justify-center items-center">
    <div class="w-md h-md m-auto fixed inset-0 bg-gray-500 bg-opacity-50 flex flex-col justify-center items-center">
        <h2 class="text-2xl font-bold text-center">Create Category</h2>
        <form @submit.prevent="submit" class="flex flex-col gap-4">
            <input type="text" v-model="form.name" placeholder="Category Name" />
            <input type="text" v-model="form.description" placeholder="Category Description" />
            <button type="submit">Create</button>
            <button type="reset">Reset</button>
            <button type="button" @click="$emit('close')">Cancel</button>
        </form>
    </div>
</div>
</template>


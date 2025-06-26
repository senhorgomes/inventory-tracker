<script setup lang="ts">
import { ref } from 'vue';

import { Head, useForm, Link } from "@inertiajs/vue3";


const form = useForm({
    name: '',
    description: '',
});

const submit = () => {
    form.post(route('categories.create'));
}
</script>

<template>
    <div class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
        <h2>Create Category</h2>
        <form @submit.prevent="submit">
            <input type="text" v-model="form.name" placeholder="Category Name" />
            <input type="text" v-model="form.description" placeholder="Category Description" />
            <button type="submit">Create</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
</template>


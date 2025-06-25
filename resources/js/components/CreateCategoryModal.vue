<template>
    <div>
        <h2>Create Category</h2>
        <input v-model="name" placeholder="Category Name" />
        <input v-model="description" placeholder="Category Description" />
        <button @click="createCategory">Create</button>
        <button @click="emit('cancel')">Cancel</button>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const name = ref('');
const description = ref('');

const emit = defineEmits(['create', 'cancel']);

const createCategory = () => {
    emit('create', { name: name.value, description: description.value });
};
</script>
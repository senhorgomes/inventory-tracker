<script setup lang="ts">
import type { Category } from '@/types';
import CreateCategoryModal from '@/components/CreateCategoryModal.vue';

interface Props {
    categories: Category[];
}

defineProps<Props>();

</script>

<template>
    <table class="w-full table-auto">
        <header class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-center">Items</h1>
        <nav>
            <Link :href="route('categories.create')" class="bg-orange-200 text-black px-4 py-2 rounded-md hover:bg-orange-600 hover:text-white">Create Item</Link>
            <Link :href="route('categories.create')" class="bg-orange-200 text-black px-4 py-2 rounded-md hover:bg-orange-600 hover:text-white">Create Category</Link>
        </nav>
    </header>
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="category in categories" :key="category.id" class="border-b">
                <td class="px-4 py-2">{{ category.name }}</td>
                <td class="px-4 py-2">{{ category.description }}</td>
            </tr>
        </tbody>
    </table>
</template>
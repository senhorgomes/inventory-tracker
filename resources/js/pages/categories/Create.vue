<script setup lang="ts">
import type { Category } from '@/types';

interface Props {
    categories: Category[];
}

defineProps<Props>();

</script>

<template>
    <h1>Create Category</h1>
    <table class="w-full table-auto">
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
<script setup lang="ts">
import type { Item } from '@/types';
import { Link } from '@inertiajs/vue3';

interface Props {
    items: Item[];
}

defineProps<Props>();

</script>

<template>
    <header class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-center">Items</h1>
        <nav>
            <Link :href="route('categories.create')" class="bg-orange-200 text-black px-4 py-2 rounded-md hover:bg-orange-600 hover:text-white">Create Item</Link>
            <Link :href="route('categories.create')" class="bg-orange-200 text-black px-4 py-2 rounded-md hover:bg-orange-600 hover:text-white">Create Category</Link>
        </nav>
    </header>
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Stock</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">SKU</th>
                <th class="px-4 py-2">Category</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in items" :key="item.id" class="border-b">
                <td class="px-4 py-2">{{ item.name }}</td>
                <td class="px-4 py-2">{{ item.description }}</td>
                <td class="px-4 py-2">{{ item.stock }}</td>
                <td class="px-4 py-2">{{ item.price }}</td>
                <td class="px-4 py-2">{{ item.sku }}</td>
                <td class="px-4 py-2">{{ item.category.name }}</td>
            </tr>
        </tbody>
    </table>
</template>
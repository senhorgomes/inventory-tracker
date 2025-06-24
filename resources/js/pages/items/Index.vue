<script setup lang="ts">
import type { Item } from '@/types';

interface Props {
    items: Item[];
}

defineProps<Props>();

</script>

<template>
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
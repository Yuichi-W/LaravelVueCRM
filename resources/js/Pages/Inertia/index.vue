<script setup>
import { Link } from '@inertiajs/inertia-vue3';
defineProps({ blogs: Array })
</script>
<template>
    <!-- flash messageあれば表示 -->
    <div v-if="$page.props.flash.message" class="bg-blue-300">
    {{ $page.props.flash.message }}</div>
    <ul>
        <!-- for文は「単数系　in 複数形」とする　:key忘れずに(sort,delete時に順番かわっても状態保持できるように) -->
        <li v-for="blog in blogs" :key="blog.id">
            件名：<Link class="text-blue-400" 
                :href="route('inertia.show', {id: blog.id})">{{ blog.title }}</Link>
            本文：{{ blog.content }}
        </li>
    </ul>
    index画面です！！
</template>
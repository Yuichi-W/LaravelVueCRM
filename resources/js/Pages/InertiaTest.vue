<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const newTitle = ref('');
const newContent = ref('');
</script>
<template>
    Inertiaテストです。
    <br />
    <a href="/">aタグでWellcomページに移動します</a>
    <br />
    <Link href="/">LinkでWellcomページに移動します</Link>
    <br />
    <!-- v-bindの省略が: 動的にURLが変更される場合の記載方法 -->
    <Link :href="route('inertia.index')">名前付きルートの確認</Link>
    <br />
    <!--  ルートパラメーターテスト -->
    <Link :href="route('inertia.show', { id : 50})"> ルートパラメーターテスト</Link>


    <div class="mb-8"></div>
    <input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}
    <br />
    <input type="text" name="newContent" v-model="newContent">{{ newContent }}
    <br />
    <Link as="button" method="post" :href="route('inertia.store')" 
    :data="{ 
        title:newTitle, 
        content: newContent 
    }">保存テスト</Link>
</template>
<script setup>
import Label from '@/Components/InputLabel.vue';
import Input from '@/Components/Input.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

const emitTest = e => console.log(e);
</script>

<template>
    <GuestLayout>
        <Label>タイトル</Label>
        <Input modelValue="初期値が入ります"
        @update:modelValue="emitTest"
        ></Input>
    </GuestLayout>
</template>
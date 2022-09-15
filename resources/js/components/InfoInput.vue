<template>
    <el-input v-model="input" size="large" placeholder="入力してください" />
</template>

<script lang="ts" setup>
import { ref } from 'vue'

const input = ref('')
</script>
<template>
  <el-input
    v-model="textarea"
    :rows="7"
    type="textarea"
    placeholder="感想・レビューを記入してください"
  />
</template>

<script lang="ts" setup>
import { ref } from 'vue'
const textarea = ref('')
</script>
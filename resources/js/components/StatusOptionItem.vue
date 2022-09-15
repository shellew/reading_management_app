<template>
  <el-select v-model="value" placeholder="選択してください" size="large">
    <el-option
      v-for="item in options"
      :key="item.value"
      :label="item.label"
      :value="item.value"
    />
  </el-select>
</template>

<script lang="ts" setup>
import { ref } from 'vue'

const value = ref('')

const options = [
  {
    value: '読書中',
    label: '読書中',
  },
  {
    value: '積読本',
    label: '積読本',
  },
  {
    value: '読んだ',
    label: '読んだ',
  },
  {
    value: '読みたい',
    label: '読みたい',
  },
]
</script>

<template>
  <el-aside class="tac">
    <el-col :span="16">
      <h5 class="mb-2"></h5>
      <el-menu
        default-active="2"
        class="el-menu-vertical-demo"
        @open="handleOpen"
        @close="handleClose"
      >
        <el-sub-menu index="1">
          <template #title>
            <el-icon><icon-menu /></el-icon>
            <span>ステータス</span>
          </template>
          <el-menu-item-group>
            <el-menu-item index="1-1">
              <a href="#">読書中</a>
            </el-menu-item>
            <el-menu-item index="1-2">
              <a href="#">積読本</a>
            </el-menu-item>
            <el-menu-item index="1-3">
              <a href="#">読んだ</a>
            </el-menu-item>
            <el-menu-item index="1-4">
              <a href="#">読みたい</a>
            </el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-menu-item index="1-5">
          <el-icon><document /></el-icon>
          <a href="#">新しい本を登録</a>
        </el-menu-item>
        <el-menu-item index="1-6">
          <el-icon><setting /></el-icon>
          <a href="#">読書目標を設定</a>
        </el-menu-item>
      </el-menu>
    </el-col>
  </el-aside>
</template>

<script lang="ts" setup>
import {
  Document,
  Menu as IconMenu,
  Location,
  Setting,
} from '@element-plus/icons-vue'
const handleOpen = (key: string, keyPath: string[]) => {
  console.log(key, keyPath)
}
const handleClose = (key: string, keyPath: string[]) => {
  console.log(key, keyPath)
}
</script>

<style>
  a{
    color: #000;
    text-decoration: none;
  }
</style>
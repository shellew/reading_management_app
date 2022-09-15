<template>
    <div class="common-layout">
        <el-container>
            <sidebar></sidebar>
            <el-main>
                <slot>
                    <registration-page></registration-page>
                </slot>
            </el-main>
        </el-container>
    </div>
</template>

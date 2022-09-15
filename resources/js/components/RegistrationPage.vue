<template>
    <slot>
        <div class="registration-page-item">
            <h4>タイトル</h4>
            <info-input></info-input>
        </div>
        <div class="registration-page-item pt-4">
            <h4>著者</h4>
            <info-input></info-input>
        </div>
        <div class="registration-page-item pt-4">
            <h4>ISBN</h4>
            <info-input></info-input>
        </div>
        <div class="registration-page-item pt-4">
            <h4>ステータス</h4>
            <status-option-item></status-option-item>
        </div>
        <div class="registration-page-item pt-4">
            <h4>メモ</h4>
            <comment-input-item></comment-input-item>
        </div>
        <div class="center-block">
            <button-item></button-item>
        </div>
    </slot>
</template>
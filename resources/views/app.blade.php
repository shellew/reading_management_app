@extends('layouts.app')

@section('content')
    <div id="app">
        <header-component></header-component>
        <example-component></example-component>

        <el-button>Default</el-button>
    </div>


    <!-- Vueを読み込む -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    


@endsection
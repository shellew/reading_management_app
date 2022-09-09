@extends('layouts.app')

@section('content')
    <div id="app">
        <h1>Laravel + Vue.js</h1>
        <h2>@{{ message }}</h2>

        <example-compnent></example-component>
    </div>


    <!-- Vueを読み込む -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        // import ExampleComponent from './components/ExampleComponent.vue'
        const app = new Vue({
          el:'#app',
          data: {
            message: 'Vue画面テスト'
          }
        });
    </script>

<example-compnent></example-component>
@endsection
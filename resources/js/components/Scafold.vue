Vue.component('scafold-vue', {
    template:`
        <div class="container-fluid bg-dark mb-3">
            <div class="container">
                <nav class="navbar navbar-dark">
                    <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                    <div>
                        <button class="btn btn-success">List</button>
                        <button class="btn btn-success">ADD</button>
                    </div>
                </nav>
                
            </div>
            <div>
                <el-button>Default①</el-button>
            </div>
        </div>
        <div><el-button>Default②</el-button></div>
        `,
    })

    var app = new Vue({
        el:'#app'
    })
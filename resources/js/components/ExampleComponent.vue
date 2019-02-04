<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <input v-model="name">
                    <h3>{{name}}</h3>
                    <h3>{{nameBackwords}}</h3>
                    <button @click="doSomething">Click me and look at your console</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "example",
        data() {
            return {
                name: "Andrew"
            };
        },
        computed: {
            nameBackwords: function() {
                return this.name.split("").reverse().join("");
            }
        },
        methods: {
            doSomething: function() {
                console.log("ya clicked it!")
            }
        },
        mounted: function() {
            console.log('Component mounted.')
        }
    }
</script>

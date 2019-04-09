<template>
    <div id="login">
        <div class="container">
            <div class="form-group">
                <input class="form-control" type="text" name="username" v-model="input.username" placeholder="Username" />
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" v-model="input.password" placeholder="Password" />
            </div>
            <button type="button" class="btn btn-rounded btn-primary" v-on:click="login()">Login</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'login',
        data() {
            return {
                input: {
                    username: "",
                    password: ""
                }
            }
        },
        methods: {
            login() {
                if(this.input.username != "" && this.input.password != "") {
                    console.log("check login here");
                } else {
                    console.log("A username and password must be present");
                }
            }
        }
    }
</script>

<style scoped>
    /*#login {
        width: 500px;
        border: 1px solid #CCCCCC;
        background-color: #FFFFFF;
        margin: auto;
        margin-top: 200px;
        padding: 20px;
    }*/
</style>
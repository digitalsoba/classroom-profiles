<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Choose a Classroom</h3>
                <h6>(View Equipment for the Classroom Selected)</h6>
            </div>
        </div>
        <br>

        <form>
            <div class="form-group">
                <select id="list" accesskey="target" ref="selectField" class="form-control">
                    <option v-for="item in equip">{{item.Building_Room}}</option>
                </select>
            </div>
            <br>
            <button type="button" @click="goToNewPage()" class="btn btn-rounded btn-primary">View Equipment</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "equipment",
        props: ["equip"],
        computed: {},
        methods: {
            goToNewPage: function() {
                console.log(this.$refs.selectField.value);
                window.location = "equip/" + this.$refs.selectField.value;
            }
        }
    };
</script>
<style type="text/css">
    .col {

    text-align: center
    }
   
</style>
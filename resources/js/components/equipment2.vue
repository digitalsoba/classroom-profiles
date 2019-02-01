<template>
    <div class="container">
        <h2>All Classes</h2>
        <form>
            <select  id="list" accesskey="target" class="form-control"  style="border-color:darkred; " ref="selectField">
                <option v-for="item in equip"> {{item.Building_Room}}</option>
            </select>
            <br>
            <button type="button" @click="goToNewPage()" class="btn btn-primary btn-block btn-group-sm" >Go</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "equipment",
        props: ["equip"],
        computed: {
        },
        methods: {
            goToNewPage: function() {
                console.log(this.$refs.selectField.value)
                window.location= this.$refs.selectField.value
            }

        }
    }
</script>

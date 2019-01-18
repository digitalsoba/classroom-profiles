<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <select ref="selectField">
                    <option v-for="item in equip">{{item.Building_Room}}</option>
                </select>
                <button @click="goToNewPage()">Go</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "equipment",
        props: ["equip"],
        data() {
            return {
                name: "Andrew"
            };
        },
        computed: {
        },
        methods: {
            goToNewPage: function() {
                console.log(this.$refs.selectField.value)
                window.location = 'equip/' + this.$refs.selectField.value;
            }
        }
    }
</script>

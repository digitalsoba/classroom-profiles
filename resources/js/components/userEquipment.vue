<template>
    <div class="container">
        <ul class="nav nav-metaphor">
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href="CsunUser">Equipment</a> </li>
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href=" CsunUserImage">Images</a> </li>
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href="/">Class Route</a> </li>
        </ul>
        <div class="row">
            <div class="col">
                <h2 class="text-center">Choose a Classroom</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form>
                    <div class="form-group">
                        <select id="list" accesskey="target" ref="selectField" class="form-control">
                            <option v-for="item in equip">{{item.Building_Room}}</option>
                        </select>
                    </div>
                    <button type="button" @click="goToNewPage()" class="btn btn-rounded btn-primary">View equipment</button><br>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "userEquipment",
        props: ["equip"],
        computed: {},
        methods: {
            goToNewPage: function() {
                console.log(this.$refs.selectField.value);
                window.location = "CsunUser/" + this.$refs.selectField.value;
            }
        }
    };
</script>

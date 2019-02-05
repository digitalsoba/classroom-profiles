<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="text-center">All Classes</h2>
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

          <br>
          <button
            type="button"
            @click="goToNewPage()"
            class="btn btn-rounded btn-primary"
          >View equipment</button>
        </form>
      </div>
    </div>
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

<template>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <RouterLink to="/" class="navbar-brand">Főoldal</RouterLink>
      <RouterLink to="/add" class="btn btn-primary">Jegy hozzáadása</RouterLink>
    </div>
  </nav>
</template>

<script>
import {RouterLink} from "vue-router"
export default{
  components:{
    RouterLink
  }
}
</script>

<style scoped>

</style>
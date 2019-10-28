<template lang="pug">
  div(
    class="home")
    img(
      alt="Vue logo"
      src="../assets/logo.png")
    HelloWorld(
      msg="123 Welcome to Your Vue.js App")
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  components: {
    HelloWorld
  }
}
</script>

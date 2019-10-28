<template lang="pug">
  div(
    class="home")
    img(
      alt="Vue logo"
      src="../assets/logo.png")
    HelloWorld(
      msg="Welcome to Your Vue.js App")
</template>

<script>
import HelloWorld from '@/components/HelloWorld.vue'
import { login } from '@/api/user'

export default {
  name: 'home',
  mounted () {
    this.init()
  },
  components: {
    HelloWorld
  },
  data () {
    return {
      // 参数
      fromData: {
        username: '',
        verifyCode: ''
      }
    }
  },
  methods: {
    init () {
      this.handleSubmit()
    },
    async handleSubmit () {
      const token = await login({
        username: 'shaosuo',
        verifyCode: '123'
      })
      console.log(token)
    }
  }
}

</script>

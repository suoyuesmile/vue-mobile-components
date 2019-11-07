<template lang="pug">
  div(
    class="home")
    Button(type="default") 默认按钮
</template>
<script>
import { login } from '@/api/user'
import { Button } from 'vant'

export default {
  name: 'home',
  mounted () {
    this.init()
  },
  components: {
    Button
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

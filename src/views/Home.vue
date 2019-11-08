<template lang="pug">
  div(
    class="home")
    van-nav-bar(title="标题"
      left-text="返回"
      right-text="按钮"
      left-arrow
      @click-left="onClickLeft"
      @click-right="onClickRight")
    van-swipe(:autoplay="3000")
      van-swipe-item(v-for="(image, index) in images" :key="index")
        img(v-lazy="image")
    van-search(placeholder="请输入搜索关键词" v-model="searchValue")
    van-tabs(v-model="active" swipeable)
      van-tab(v-for="index in 10" :title="'选项 ' + index") 内容 {{ index }}

    Button(type="default") 默认按钮
    Cell(isLink @click="showPopup") popup展示弹出层
    Cell(isLink @click="showDialog") Dialog展示弹出层
    Cell(isLink @click="showCustomDialog") 自定义Dialog展示弹出层

    Popup(v-model="show" position="bottom" :style="{height: '20%'}"  closeable close-icon-position="top-right") 123
    van-dialog(v-model="dialogShow" title="标题" show-cancel-button)
      img(src="http://imooc.res.lgdsunday.club/goods-2.jpg")
    van-submit-bar(:price="123" button-text="去结算" @sumbit="onSubmit")

</template>
<script>
import { login } from '@/api/user'
import Vue from 'vue'
import { Button, Cell, Popup, Dialog, SubmitBar, Search } from 'vant'
import { Swipe, SwipeItem } from 'vant'
import { Lazyload } from 'vant'
import { NavBar } from 'vant'
import { Tab, Tabs } from 'vant';

Vue.use(Tab).use(Tabs)
Vue.use(NavBar)
Vue.use(Lazyload)
Vue.use(Swipe).use(SwipeItem)
Vue.use(SubmitBar)
Vue.use(Dialog)
Vue.use(Search)
export default {
  name: 'home',
  mounted() {
    this.init()
  },
  components: {
    Button,
    Cell,
    Popup
  },
  data() {
    return {
      // 参数
      fromData: {
        username: '',
        verifyCode: ''
      },
      show: false,
      dialogShow: false,
      searchValue: '',
      images: [
        'http://imooc.res.lgdsunday.club/goods-1.jpg',
        'http://imooc.res.lgdsunday.club/goods-2.jpg',
        'http://imooc.res.lgdsunday.club/goods-3.jpg',
        'http://imooc.res.lgdsunday.club/goods-4.jpg'
      ],
      active: 0
    }
  },
  methods: {
    init() {
      this.handleSubmit()
    },
    async handleSubmit() {
      const token = await login({
        username: 'shaosuo',
        verifyCode: '123'
      })
      console.log(token)
    },
    showPopup() {
      this.show = true
    },
    showDialog() {
      Dialog.confirm({
        title: '标题',
        message: '弹窗内容'
      })
        .then(() => {
          // on confirm
        })
        .catch(() => {
          // on cancel
        })
    },
    showCustomDialog() {
      this.dialogShow = true
    },
    onSubmit() {},
    onClickLeft() {},
    onClickRight() {}
  }
}
</script>

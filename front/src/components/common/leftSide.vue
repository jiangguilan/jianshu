<template>
  <div class="leftSidePage">
    <ul class="box">
      <li :class="['item','item'+index]" v-for="(item,index) in title" :key="index">
        <img :src="item.img">
      </li>
    </ul>
    <ul class="author">
      <li class="item clear title">
        <span class="lt">推荐作者</span>
        <span class="rt">
          <i class="fa fa-refresh"></i>
          换一批
        </span>
      </li>
      <li class="item clear text" v-for="(item,index) in 5" :key="index">
        <span class="lt img-box">
          <img src="../../assets/img/user.jpg" alt="">
        </span>
        <span class="lt msg">
          <div class="name">作者名字</div>
          <p class="subText">
            写了
            <span>666.6</span>
            字-
            <span>10k</span>
            喜欢
          </p>
        </span>
        <span class="follow rt">+关注</span>
      </li>
      <li class="item view-more">查看全部 ></li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'leftSidePage',
  data(){
    return{
      title: [
        {'id':0,'title':'简书会员','img':require('../../assets/img/1.png')},
        {'id':1,'title':'7日热门','img':require('../../assets/img/2.png')},
        {'id':2,'title':'30日热门','img':require('../../assets/img/3.png')},
        {'id':3,'title':'优选连载','img':require('../../assets/img/4.png')},
        {'id':4,'title':'简书版权','img':require('../../assets/img/5.png')},
        {'id':5,'title':'简书大学堂','img':require('../../assets/img/6.png')}
      ]
    }
  }
}
</script>
<style lang="scss" scoped>
@import '../../assets/scss/common.scss';
@import '../../assets/scss/leftSide.scss';
</style>



<template>
  <div class="bottomPage">
    <ul class="box">
      <li class="item" v-for="(item,index) in msg" :key="index" >
        <a href="#">
          {{item.title}}
        </a>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'bottomPage',
  data(){
    return{
      msg: [
        {'title':'关于简书'},
        {'title':'联系我们'},
        {'title':'加入我们'},
        {'title':'简书出版'},
        {'title':'品牌与徽标'},
        {'title':'帮助中心'},
        {'title':'合作伙伴'},
      ]
    }
  }
}
</script>
<style lang="scss" scoped>
@import '../../assets/scss/common.scss';
.bottomPage{
  .box{
    .item{
      display: inline-block;
      margin-right: .1rem;
      a{
        color: $midGrey;
        font-size: .13rem;
        &:hover{
          color: $subTitleColor;
        }
      }
    }
  }
}
</style>



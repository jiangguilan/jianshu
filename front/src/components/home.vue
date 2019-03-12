<template>
    <div class="homePage">
        <div class="header line-bottom">
            <headerPage></headerPage>
        </div>
        <div class="content clear">
            <div class="main lt">
                <div class="banner">
                    <!-- <img src="../assets/img/image.jpg" > -->
                    <swiper :options="swiperOption"
                            ref="mySwiper">
                        <swiper-slide v-for="(item,index) in 2"
                                      :key="index">
                            <img src="../assets/img/image.jpg">
                        </swiper-slide>
                    </swiper>
                    <div class="swiper-pagination"
                         slot="pagination"></div>
                    <div class="swiper-button-prev"
                         slot="button-prev"><</div>
                    <div class="swiper-button-next"
                         slot="button-next">></div>
                </div>
                <ul class="box">
                    <li class="clear item line-top"
                        v-for="(item,index) in 3"
                        :key="index">
                        <div class="lt left">
                            <div class="title">
                                <a href="#">标题</a>
                            </div>
                            <p class="text">正文描述</p>
                            <div class="clear icon-box">
                                <span class="item">
                                    <i class="fa fa-eye active"></i>
                                    2.8
                                </span>
                                <span class="item">
                                    <i></i>
                                    作者
                                </span>
                                <span class="item">
                                    <i class="fa fa-thumbs-down"></i>
                                    0
                                </span>
                                <span class="item">
                                    <i class="fa fa-heart"></i>
                                    6
                                </span>
                            </div>
                        </div>
                        <div class="rt right">
                            <img src="../assets/img/user.jpg">
                        </div>
                    </li>
                </ul>
                <div class="read-more">阅读更多</div>
            </div>
            <div class="left-side rt">
                <leftSidePage></leftSidePage>
            </div>
        </div>
        <div class="bottom">
            <bottomPage></bottomPage>
        </div>
    </div>
</template>
<script>
import headerPage from "./common/header";
import bottomPage from "./common/bottom";
import leftSidePage from "./common/leftSide";

export default {
    name: "homePage",
    data() {
        return {
            swiperOption: {
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination"
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            }
        };
    },
    components: {
        headerPage,
        bottomPage,
        leftSidePage
    },
    mounted(){
        console.log(1)
        this.gb.post()
    }
};
</script>
<style lang="scss" scoped>
@import "../assets/scss/common.scss";
@import "../assets/scss/home.scss";
</style>



<template>
    <div class="headerPage clear">
        <div class="left lt">
            <img src="../../assets/img/logo.png" >
        </div>
        <div class="center">
            <ul class="box">
                <li class="item active">
                    首页
                </li>
                <li class="item">
                    下载APP
                </li>
                <li class="item search-box">
                    <input type="search">
                    <span>搜索</span>
                    <i class="fa fa-search" style="color:#969696"></i>
                </li>
            </ul>
        </div>
        <div class="right clear">
            <span class="item login-btn lt">登录</span>
            <span class="item register-btn lt">注册</span>
            <span class="item write-btn lt">写文章</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "headerPage",
    data() {
        return {};
    }
};
</script>

<style lang="scss" scoped>
@import "../../assets/scss/common.scss";
@import "../../assets/scss/header.scss";
</style>



<template>
    <div class="signUpPage">
        <img class="logo" src="../../assets/img/logo.png" alt="">
        <div class="box">
            <div class="top">
                <span class="item">登录</span>
                <span class="item active">注册</span>
            </div>
            <ul class="list">
                <li class="item">
                    <input class="name" type="text" placeholder="你的昵称">
                </li>
                <li class="item">
                    <input class="account" type="text" placeholder="手机号">
                </li>
                <li class="item">
                    <input class="pass" type="password" placeholder="设置密码">
                </li>
            </ul>
            <div class="reg-btn">注册</div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'signUpPage'
}
</script>
<style lang="scss" scoped>
@import '../../assets/scss/common.scss';
@import '../../assets/scss/signUp.scss';
</style>



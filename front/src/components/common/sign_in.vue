<template>
    <div class="signIpPage">
        <img class="logo" src="../../assets/img/logo.png" alt="">
        <div class="box">
            <div class="top">
                <span class="item active">登录</span>
                <span class="item">注册</span>
            </div>
            <ul class="list">
                <li class="item">
                    <input class="account" type="text" placeholder="手机号或邮箱">
                </li>
                <li class="item">
                    <input class="pass" type="password" placeholder="密码">
                </li>
            </ul>
            <div class="reg-btn">登录</div>
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
@import '../../assets/scss/signIn.scss';
</style>



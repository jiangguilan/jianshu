<template>
    <div id="app">
        <router-view />
    </div>
</template>

<script>
export default {
    name: "App",
    methods: {
        fontSize() {
          // 1366,1920，1440
            // document.documentElement.style.fontSize = document.documentElement.clientWidth / 7.5 + "px";

            let w = document.documentElement.clientWidth;// 窗口宽度
            if (w >= 1366) w = 1366;
            let designSize = 1366; // 设计图尺寸
            let rem = (w * 100) / designSize;
            document.documentElement.style.fontSize = rem + "px";
        }
    },
    mounted() {
        this.fontSize();
    }
};
</script>
<style lang="scss">
@import "./assets/scss/common.scss";
</style>


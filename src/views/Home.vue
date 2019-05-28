<template>
  <div>
    <PageNavigation></PageNavigation>
    <HomeHeader></HomeHeader>
    <HomeAbout></HomeAbout>
    <HomeIcons></HomeIcons>
    <HomeTimeline></HomeTimeline>
    <HomeForm></HomeForm>
  </div>
</template>

<script>
// @ is an alias to /src
import HomeHeader from '@/components/HomeHeader.vue';
import HomeAbout from '@/components/HomeAbout.vue';
import HomeIcons from '@/components/HomeIcons.vue';
import HomeTimeline from '@/components/HomeTimeline.vue';
import HomeForm from '@/components/HomeForm.vue';
import PageNavigation from '@/components/PageNavigation.vue'


export default {
  name: 'home',
  components: {
    HomeHeader,
    HomeAbout,
    HomeIcons,
    HomeTimeline,
    HomeForm,
    PageNavigation

  }
}
</script>
<style lang="scss">

</style>

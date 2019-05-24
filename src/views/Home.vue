<template>
  <div>
    <HomeHeader></HomeHeader>
    <HomeAbout></HomeAbout>
    <HomeIcons></HomeIcons>
    <HomeTimeline></HomeTimeline>
  </div>
</template>

<script>
// @ is an alias to /src
import HomeHeader from '@/components/HomeHeader.vue';
import HomeAbout from '@/components/HomeAbout.vue';
import HomeIcons from '@/components/HomeIcons.vue';
import HomeTimeline from '@/components/HomeTimeline.vue';


export default {
  name: 'home',
  components: {
    HomeHeader,
    HomeAbout,
    HomeIcons,
    HomeTimeline

  }
}
</script>

<template>
  <div class="[ header ]" id="toppen">
      <div class="[ header_background ]">

          <div class="[ header_background-square ]">
              <iframe src="https://player.vimeo.com/video/341665919?&autoplay=1&muted=1" height="100px" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle" playsinline muted ></iframe>
              <img src="@/assets/iframe-replace-min.png" alt="Logo" class="replace-iframe">
          </div>

          <div class="[ header_background-text ]">
              <h2 class="[ headerText_first-larger ]"><span class="[ headerText_first-bold ]">MY</span> PROJECTS</h2>
              <h3 class="[ headerText_second-smaller ]">VIEW VIDEOS</h3>
              <h4 class="[ headerText_third ]">	&amp; AND MOTION GRAPHICS</h4>
         </div>
      </div>
  </div>
</template>



<script>
export default {
  name: 'ProjectsHeader'
}
</script>



<style lang="scss" scoped>
@import '@/styles/main.scss';
@import '@/styles/_iframeHeader.scss';





</style>

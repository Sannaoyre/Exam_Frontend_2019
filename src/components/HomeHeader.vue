<template>
  <div class="[ header ]">
      <div class="[ header_background ]">

          <div class="[ header_background-square ]">
              <iframe id="vid" src="https://player.vimeo.com/video/341665919/?&autoplay=1&muted=1" height="100px" frameborder="0" allow="autoplay; fullscreen" allowfullscreen align="middle" playsinline muted title="Film of logo animation"></iframe>
              <!--<img src="@/assets/iframe-replace-min.png" alt="Logo" class="replace-iframe"> Image to use instead of film-->
          </div>

          <div class="[ header_background-text ]">
              <h2 class="[ headerText_first ]"><span class="[ headerText_first-bold ]">MARKUS</span> ELDEVIK</h2>
              <h3 class="[ headerText_second ]">FILM EDITOR</h3>
              <h4 class="[ headerText_third ]">&amp; MOTION GRAPHIC DESIGNER</h4>
         </div>
      </div>
  </div>
</template>



<script>
export default {
  name: 'HomeHeader',
}
</script>



<style lang="scss" scoped>
@import '@/styles/main.scss';
@import '@/styles/_iframeHeader.scss';
</style>

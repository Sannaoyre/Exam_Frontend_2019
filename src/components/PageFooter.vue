<template>
  <footer>
    <p>markus_eldevik@hotmail.com  &#47; +47 941 93 721  &#47;  instagram: @mographmark</p>
  </footer>
</template>








<script>
export default {
  name: 'PageFooter',
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';

footer{
  background-color: $primary-black;
  p{
    color: $primary-white;
    padding: 50px;
    text-align: center;
    font-family: $header-font;
  }
}
</style>

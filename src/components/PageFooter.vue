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
  border-top: 1px solid $primary-white;
  p{
    padding: 50px;
    text-align: center;
    color: $primary-white;
    font-family: $header-font;
  }
}
</style>

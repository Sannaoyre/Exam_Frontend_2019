<template>
  <div>
    <div class="gradient2BoxReverse">

        <tabs id="test">
          <tab name="Films" :selected="true">
            <h1>Here is the film content</h1>
          </tab>

          <tab name="Graphics">
            <h1>Here is the graphics content</h1>
          </tab>
        </tabs>



    </div>
    <div  class="gradient2Box">
    </div>
  </div>
</template>

<script>
import tabs from '@/components/ProjectsTabs.vue'
import tab from '@/components/ProjectsTab.vue'

export default {
  name: 'ProjectsWork',
  components: {
    tabs,
    tab

  }
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';
</style>

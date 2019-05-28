<template>
  <div>
      <PageNavigation></PageNavigation>
      <ProjectsHeader></ProjectsHeader>
  </div>
</template>

<script>
// @ is an alias to /src
import PageNavigation from '@/components/PageNavigation.vue'
import ProjectsHeader from '@/components/ProjectsHeader.vue'


export default {
  name: 'projects',
  components: {
    PageNavigation,
    ProjectsHeader

  }
}
</script>


<style lang="scss" scoped>
</style>

<template>
  <div>
      <PageNavigation></PageNavigation>
      <ProjectsHeader></ProjectsHeader>
      <ProjectsWork></ProjectsWork>
  </div>
</template>

<script>
// @ is an alias to /src
import PageNavigation from '@/components/PageNavigation.vue'
import ProjectsHeader from '@/components/ProjectsHeader.vue'
import ProjectsWork from '@/components/ProjectsWork.vue'


export default {
  name: 'projects',
  components: {
    PageNavigation,
    ProjectsHeader,
    ProjectsWork

  }
}
</script>


<style lang="scss" scoped>
</style>

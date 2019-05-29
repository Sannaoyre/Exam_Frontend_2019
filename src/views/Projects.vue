<template>
  <div>
      <PageNavigation></PageNavigation>
      <ProjectsHeader></ProjectsHeader>
      <ProjectsWork></ProjectsWork>
      <PageFooter></PageFooter>
  </div>
</template>

<script>
// @ is an alias to /src
import PageNavigation from '@/components/PageNavigation.vue';
import ProjectsHeader from '@/components/ProjectsHeader.vue';
import ProjectsWork from '@/components/ProjectsWork.vue';
import PageFooter from '@/components/PageFooter.vue';


export default {
  name: 'projects',
  components: {
    PageNavigation,
    ProjectsHeader,
    ProjectsWork,
    PageFooter

  }
}
</script>


<style lang="scss" scoped>
</style>

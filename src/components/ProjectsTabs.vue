<template>
  <div>
        <div class="tabs">
          <ul>
            <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive } " v-bind:key='tab.id'>
            <button @click="selectTab(tab)">{{ tab.name }}</button></li>
          </ul>
        </div>

        <div class="tab-details">
          <slot></slot>
        </div>

  </div>
</template>

<script>
export default {
  name: 'tabs',
  data(){
    return { tabs: [] };
  },


  created() {
    this.tabs = this.$children ;
  },


  methods: {
    selectTab(selectedTab){
      this.tabs.forEach(tab =>{
       tab.isActive = (tab.name == selectedTab.name);
      });
    }
  }
}
</script>

<style lang="scss" scoped>
@import '@/styles/main.scss';
</style>

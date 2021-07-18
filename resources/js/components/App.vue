<template>

  <div class="flex flex-col h-screen justify-between">
    <!-- 
      This will also work

      <AppHeader></AppHeader> 
    -->
    <app-header></app-header>
    
      <main class="flex-grow bg-blue-100">
        <router-view></router-view>
      </main>

    <!-- <AppFooter></AppFooter> -->
    <app-footer></app-footer>
  </div>

</template>

<script>
import AppHeader from './partials/Header.vue'
import AppFooter from './partials/Footer.vue'
export default {
    components: {
      AppHeader,
      AppFooter
    }
}
</script>


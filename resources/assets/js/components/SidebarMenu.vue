<template lang="html">
  <ul class="nav nav-sidebar">
    <li id="home" @click="setActive('inicio')" :class="{ active: isActive('inicio') }"><a href="/">Inicio</a></li>
    <li id="reportes" @click="setActive('reportes')" :class="{ active: isActive('reportes') }"><a href="/reportes">Reportes</a></li>
    <li id="graficas" @click="setActive('graficas')" :class="{ active: isActive('graficas') }"><a href="/chart">Gráficas</a></li>
  </ul>
</template>

<script>
export default {
  data(){
    return { activeItem: 'inicio' }
  },
  methods: {
    isActive: function (menuItem) {
      return this.activeItem === menuItem
    },
    setActive: function (menuItem) {
      this.activeItem = menuItem
    }
  }
}
</script>

<style lang="css">
</style>

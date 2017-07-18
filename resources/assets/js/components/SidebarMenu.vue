<template lang="html">
  <ul id="nav-mobile" class="side-nav fixed">
    <li class="logo">
    <a href="/">
      <h3>
        
          Gerencial
        
      </h3>
      </a>
    </li>
    <li id="home"><a href="/">Inicio</a></li>
    <li><a class="subheader">Por recurso</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Reportes<i class="material-icons">receipt</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="/reportes/persona">Personal</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Gráficas<i class="material-icons">equalizer</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="/graficas/persona">Personal</a></li>
                <li><a href="/graficas/fuente">Presupuesto</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a class="subheader">Por Área</a></li>
      <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Recursos Humanos<i class="material-icons">perm_contact_calendar</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="/reportes/persona">Reportes</a></li>
                   <li><a href="/graficas/persona">Gráficas</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Presupuesto<i class="material-icons">work</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="/graficas/fuente">Fuentes de Financiamiento</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
  </ul>
</template>

<script>
export default {
  data(){
    return {  }
  },
  methods: {
  }
}
</script>

<style lang="css">
</style>

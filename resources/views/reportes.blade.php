@extends ('master')
@section('head')
    <title>Bienvenido</title>
@stop

@section('content')
        <h1 class="page-header">Reportes</h1>
        <!-- component template -->
        <script type="text/x-template" id="grid-template">
          <table class="table table-condensed table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th v-for="key in columns"
                  @click="sortBy(key)"
                  :class="{ active: sortKey == key }">
                  @{{ key | capitalize}}
                  <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
                  </span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="entry in filteredData">
                <td v-for="key in columns">
                  @{{entry[key]}}
                </td>
              </tr>
            </tbody>
          </table>
        </script>
        <!-- root element -->
        <div id="app">
          <form id="search"  class="form-inline">
            <div class="form-group">
              <label for="query">Filtrar</label>
              <input name="query" class="form-control" v-model="searchQuery" />
            </div>
          </form>
          <hr>
          <grid
            :data="gridData"
            :columns="gridColumns"
            :filter-key="searchQuery">
          </grid>
        </div>
@stop
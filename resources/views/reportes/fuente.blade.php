@extends ('master', ['body_class' => 'reportes'])
@section('head')
@stop
@section('pageName')
Reportes de Fuentes
@stop

@section('content')
  <table id="fuente" class="responsive-tabl compact">
       <thead>
       <tr>
           <th>Item</th>
           <th>Descripción</th>
           <th>Año</th>
           <th>Anticipo</th>
           <th>Devengado</th>
           <th>Porcentaje</th>
       </tr>
       </thead>
   </table>

@stop

@section('footer')
  <script src="{{ URL::asset('/js/datatables.js') }}"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    oTable = $('#fuente').DataTable({
        "processing": true,
        "serverSide": true,
        "language": {
            "url": "{{ URL::asset('/js/datatables.spanish.lang.json') }}"
        },
        "ajax": "{{ route('datatable.fuentes') }}",
        "columns": [
            {data: 'item_fuente'},
            {data: 'des_fuente'},
            {data: 'year_fuente'},
            {data: 'ant_fuente', "sType": "numeric-comma"},
            {data: 'dev_fuente', "sType": "numeric-comma"},
            {data: 'porc_fuente'}
        ]
    });
  });
  </script>
@stop


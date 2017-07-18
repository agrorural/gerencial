@extends ('master', ['body_class' => 'reportes'])
@section('head')
@stop
@section('pageName')
Reportes de Personal
@stop

@section('content')
  <table id="persona" class="responsive-table">
       <thead>
       <tr>
           <th>Tipo</th>
           <th>Año</th>
           <th>Mes</th>
           <th>Patronal</th>
           <th>Remuneración</th>
           <th>Personal</th>
       </tr>
       </thead>
   </table>

@stop

@section('footer')
  <script src="{{ URL::asset('/js/datatables.js') }}"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    oTable = $('#persona').DataTable({
        "processing": true,
        "serverSide": true,
        "language": {
            "url": "{{ URL::asset('/js/datatables.spanish.lang.json') }}"
        },
        "ajax": "{{ route('datatable.personas') }}",
        "columns": [
            {data: 'des_tipo_persona'},
            {data: 'id_year'},
            {data: 'id_month'},
            {data: 'imp_patronal'},
            {data: 'imp_remuneracion', "sType": "numeric-comma"},
            {data: 'total_persona'}
        ]
    });
  });
  </script>
@stop


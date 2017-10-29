@extends('adminPortal.masterfile')
@section('maintenance_title', 'Provinces | Municipality | Barangay')
@section('content')

<div id="destindex">
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div id="table-container" class="panel-body">
                    @include('admin.provinces.municipalities.tableBarangays')        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('modals')

@endsection

@section('scripts')
<script>

        $(document).ready(function () {
                $('#dataTable').DataTable();

                function loadTable(){
                $.ajax({
                    type: 'get',
                    url: "{{ route('province.table') }}",
                    dataType: 'html',
                    success:function(data)
                    {
                        $('#table-container').html(data);
                        $('#dataTable').DataTable();
                    }
                });
            }
        });

</script>
@endsection

@section('vue-scripts')
<script>
    new Vue({
   el: '#destindex',
   data: {
   message: 'Add'
   }
});
</script>

@endsection
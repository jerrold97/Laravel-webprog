@extends('adminPortal.masterfile')
@section('maintenance_title', 'Municipalities/Cities')
@section('content')

<div id="destindex">
    <hr>
    <select id="query_province" class="form-control" name="timeliness" required>
        <option value="0">All Provinces</option>
        <option value="1">Albay</option>
        <option value="2">Camarines Norte</option>
        <option value="3">Camarines Sur</option>
        <option value="4">Catanduanes</option>
        <option value="5">Masbate</option>
        <option value="6">Sorsogon</option>
    </select>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div id="table-container" class="panel-body">
                    @include('admin.municipalities.table')        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('modals')
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
        <div id="modal-dialog" class="modal-dialog  modal-md" role="document">
        
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog" style="display: none; padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-trash"></i> Are you sure you want to delete
                        this destination?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('province.destroy', '__id')}}" id="delete_form" method="DELETE">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="DELETE">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection

@section('scripts')
<script>

        $(document).ready(function () {
                $('#dataTable').DataTable();
            function loadTable(){
                $.ajax({
                    type: 'get',
                    url: "{{ route('municipality.table') }}",
                    dataType: 'html',
                    success:function(data)
                    {
                        $('#table-container').html(data);
                        $('#dataTable').DataTable();
                    }
                });

            }
            $(document).on('change','#query_province', function(e) {
                console.log(e);
                var province = e.target.value;
                console.log("change",province);
                province == 0 ? loadTable() : loadTableProvince(province);
                
            });

            //Load destinations where province == id
            function loadTableProvince(id){
                //var id = $('#id').val();
                var query_municipality = $('#query_municipality').val();
                $.ajax({
                    type: 'get',
                    url: '{{ route('municipality.table') }}'+"/" + id,
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
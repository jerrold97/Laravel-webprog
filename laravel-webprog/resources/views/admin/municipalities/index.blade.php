@extends('adminPortal.masterfile')
@section('maintenance_title', 'Municipalities/Cities')
@section('content')
<div class="col-md-10">
    <div class="container" id="destindex">
        <div>
        @if(Session::has('info'))
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-info">{{ Session::get('info') }}</p>
                </div>
            </div>
        @endif
        <hr>
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

                        function loadTable(){
                $.ajax({
                    type: 'get',
                    url: "{{ route('province.table') }}",
                    dataType: 'html',
                    success:function(data)
                    {
                        $('#table-container').html(data);
                        //$('#dataTable').DataTable();
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
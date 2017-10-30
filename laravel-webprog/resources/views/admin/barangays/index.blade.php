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
    <select id="query_municipality" class="form-control" name="timeliness" required>

    </select>
    <select id="query_barangay" class="form-control" name="timeliness" required>
        {{-- <option disabled selected value> -- Select an option -- </option> --}}

    </select>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div id="table-container" class="panel-body">
                    @include('admin.barangays.table')        
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
                    url: "{{ route('barangay.table') }}",
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
                console.log("loadTableProvince", id);
                var query_municipality = $('#query_municipality').val();
                loadMunicipalities(id, query_municipality);
                $.ajax({
                    type: 'get',
                    url: '{{ route('barangay.table') }}'+"/" + id,
                    dataType: 'html',
                    success:function(data)
                    {
                        console.log("loadTableProvince success");
                        $('#table-container').html(data);
                        $('#dataTable').DataTable();
                    }
                });
            }


            function loadMunicipalities(province, municipality) {
                selectMunicipalities(province, municipality);

                    loadTableMunicipalities(province, municipality);
                
               
            }

            function selectMunicipalities(province, municipality)
            {
                //if first load municipality == undefined
                console.log("Inside selectMunicipalities province", province);
                console.log("Inside selectMunicipalities municipality", municipality);
                $.ajax({
                    type: 'GET',
                    url: '{{ route("destination.index") }}' +"/create/" + province,
                    success: function(data) {
                        console.log("success");
                         $('#query_municipality').empty();
                         $('#query_barangay').empty();
                         $("#query_municipality").append('<option value="0">Show All</option>');
                         //if first load - line of code to append a value in #query_municipality
                         console.log(data);
                        $.each(data, function(index,subcatObj){
                            console.log(index);
                            console.log(subcatObj.municipality);
                            $('#query_municipality').append('<option  value="'+subcatObj.municipality_id+'">'+subcatObj.municipality+'</option>');
                        });
                    }
                });
            }

            function loadTableMunicipalities(province, municipality) {
                console.log("Inside loadTableMunicipalities province", province);
                console.log("Inside loadTableMunicipalities municipality", municipality);
                
                if(municipality == null)
                {
                    console.log("null");
                    municipality = 0;
                }

                $.ajax({
                    type: 'GET',
                    url: '{{ route("barangay.index") }}' +"/query/" + province + "/" + municipality,
                    dataType: 'html',
                    success:function(data)
                    {
                        console.log(data);
                        $('#table-container').html(data);
                        $('#dataTable').DataTable();
                        console.log("success data loadTableMunicipalities");
                    },
                    catch: function(data)
                    {
                        console.log("Error", data);
                    }
                });
            }

            $(document).on('change','#query_municipality', function(e) {
                console.log(e);
                var municipality = e.target.value;
                var query_province = $('#query_province').val();
                console.log("change municipality",municipality);
                console.log("Query_province", query_province);
                //municipality == 0 ? loadMunicipalities(province,municipality) : loadMunicipalities(province,municipality);
                selectBarangays(query_province,municipality);
                loadTableMunicipalities(query_province,municipality);
                
            });

            $(document).on('change','#query_barangay', function(e) {
                console.log(e);
                var province = $('#query_province').val();
                var municipality = $('#query_municipality').val();
                var barangay = e.target.value;

                console.log("change barangay",barangay);
                console.log("Query_province", province);
                //municipality == 0 ? loadMunicipalities(province,municipality) : loadMunicipalities(province,municipality);
                //selectBarangays(query_province,municipality);
                loadTableBarangays(province, municipality, barangay);
                
            });

            function loadTableBarangays(province, municipality, barangay) {
                console.log("Inside loadTableBarangays province", province);
                console.log("Inside loadTableBarangays municipality", municipality);
                console.log("Inside loadTableBarangays barangay", barangay);


                $.ajax({
                    type: 'GET',
                    url: '{{ route("barangay.index") }}' +"/query/" + province + "/" + municipality + "/" + barangay,
                    dataType: 'html',
                    success:function(data)
                    {
                        console.log(data);
                        $('#table-container').html(data);
                        $('#dataTable').DataTable();
                    },
                    catch: function(data)
                    {
                        console.log("Error", data);
                    }
                });
            }

            function selectBarangays(province, municipality) {
                console.log("Inside selectBarangays province", province);
                console.log("Inside selectBarangays municipality", municipality);   
                $.ajax({
                    type: 'GET',
                    url: '{{ route("destination.index") }}' +"/create/" + province + "/" + municipality,
                    success: function(data) {
                        console.log("success");
                         $('#query_barangay').empty();
                         $("#query_barangay").append('<option value="0">Show All</option>');
                         console.log(data);
                        $.each(data, function(index,subcatObj){
                            console.log(index);
                            console.log(subcatObj);
                             $('#query_barangay').append('<option  value="'+subcatObj.barangays_id+'">'+subcatObj.barangay_name+'</option>');
                        });
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
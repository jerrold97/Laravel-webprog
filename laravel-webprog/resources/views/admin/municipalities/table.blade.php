<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Municipality Name</th>
        
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($municipalities as $municipality)
    <tr>
        <td>{{ $municipality->municipality }}</td>

        <td class="">

           <a href="{{ route('barangay.show',$municipality->municipality_id)}}"> <div class=" btn-sm btn-primary pull-right delete" data-id="{{$municipality->municipality_id}}">
                <i class="voyager-eye"></i> Destinations
            </div></a>
            <a href="{{ route('barangay.show',$municipality->municipality_id)}}"> <div class="btn-sm btn-info pull-right delete" data-id="{{$municipality->municipality_id}}">
                <i class="voyager-eye"></i> Barangay
            </div></a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

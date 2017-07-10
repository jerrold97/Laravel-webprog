<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Province Name</th>
        <th>Capital</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($destinations as $destination)
    <tr>
        <td>{{ $destination->dname }}</td>
        
        <td class="">
           <a href="{{ route('destination.show',$destination->destinations_id)}}"> <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$destination->destinations_id}}">
                <i class="voyager-eye"></i> Destinations
            </div></a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

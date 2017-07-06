<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Destination</th>
        <th>Location</th>
        <th>Description</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($destinations as $destination)
    <tr>
        <td>{{ $destination->dname }}</td>
        <td>{{ $destination->dlocation}}</td>
        <td>{{ $destination->ddesc}}</td>
        <td class="">
            <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$destination->id}}">
                <i class="voyager-trash"></i> Delete
            </div>
            <a data-id="{{$destination->id}}" href="#" class="btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> Edit
            </a>
            <a data-id="{{$destination->id}}" href="#" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

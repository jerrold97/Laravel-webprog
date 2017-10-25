<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Province</th>
        <th>Name</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($officials as $official)
    <tr>
        <td>{{ $official->province->province}}</td>
        <td>{{ $official->fullName()}}</td>
        <td class="">
            <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$official->official_id}}">
                <i class="voyager-trash"></i> Delete
            </div>
            <a data-id="{{$official->official_id}}" href="#" class="btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> Edit
            </a>
            <a data-id="{{$official->official_id}}" href="#" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

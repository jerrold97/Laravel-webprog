<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Province Name</th>
        <th>Capital</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($provinces as $province)
    <tr>
        <td>{{ $province->province }}</td>
        <td>{{ $province->capital}}</td>
        <td class="">
            <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$province->provinces_id}}">
                <i class="voyager-eye"></i> Municipalities
            </div>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

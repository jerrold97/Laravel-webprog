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
            <a data-id="{{$province->provinces_id}}" href="{{ route('province.show', $province->provinces_id)}}" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

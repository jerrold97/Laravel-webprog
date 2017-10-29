<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Municipality</th>
        <th>Information</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($municipalities as $municipality)
    <tr>
        <td>{{ $municipality->municipality }}</td>
        <td>Lorem Ipsum</td>
        <td class="">
            <a data-id="{{$municipality->municipality_id}}" href="{{ route('province.showBarangays', $municipality->municipality_id)}}" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

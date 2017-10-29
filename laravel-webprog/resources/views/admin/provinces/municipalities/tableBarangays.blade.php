<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Name</th>
        <th>Description</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($barangays as $barangay)
    <tr>
        <td>{{ $barangay->barangay_name }}</td>
        <td>{{ $barangay->barangay_desc }}</td>
        <td class="">
            <a data-id="{{$barangay->barangays_id}}" href="{{ route('province.showBarangays', $barangay->barangays_id)}}" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Barangay Name</th>
        <th>Barangay Description</th>
        <th>Municipality/City</th>
      <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($barangays as $barangay)
    <tr>
        <td>{{ $barangay->barangay_name }}</td>
        <td>{{ $barangay->barangay_desc }}</td>
        <td>{{ $barangay->municipality->municipality }}</td>
        <td class="">
           <a href="{{ route('barangay.show',$barangay->barangays_id)}}"> <div class="delete-modal btn-sm btn-info pull-right delete" data-id="{{$barangay->barangays_id}}">
                <i class="voyager-eye"></i> Information
            </div></a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

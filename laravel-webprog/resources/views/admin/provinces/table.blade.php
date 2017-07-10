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
        <button class="btn btn-danger" data-toggle="modal" data-target="#">Edit</button>
        <button class="btn btn-alert" data-toggle="modal" data-target="#">Delete</button>
           <a href="{{ route('province.show',$province->provinces_id)}}"> <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$province->provinces_id}}">
                <i class="voyager-eye"></i> Municipalities
            </div></a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

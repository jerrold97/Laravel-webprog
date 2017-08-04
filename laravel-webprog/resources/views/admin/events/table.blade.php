<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Event Name</th>
        <th>Event Description</th>
        <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($events as $event)
    <tr>
        <td>{{ $event->event_name }}</td>
        <td>{{ $event->event_desc}}</td>
        <td class="">
            <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$event->event_id}}">
                <i class="voyager-trash"></i> Delete
            </div>
            <a data-id="{{$event->event_id}}" href="#" class="btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> Edit
            </a>
            <a data-id="{{$event->event_id}}" href="#" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

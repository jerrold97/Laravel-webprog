<table id="dataTable" class="table table-hover">
<thead>
    <tr>
		<th>Article Name</th>
        <th>Article Description</th>
        <th class="no-sort sorting_disabled actions">Actions</th>
    </tr>
</thead>
<tbody>
	@foreach($articles as $article)
    <tr>
        <td>{{ $article->article_name }}</td>
        <td>{{ $article->article_desc}}</td>
        <td class="">
            <div class="delete-modal btn-sm btn-danger pull-right delete" data-id="{{$article->article_id}}">
                <i class="voyager-trash"></i> Delete
            </div>
            <a data-id="{{$article->article_id}}" href="#" class="btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> Edit
            </a>
            <a data-id="{{$article->article_id}}" href="#" class="btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> View
            </a>
        </td>
    </tr>
	@endforeach
</tbody>
</table>

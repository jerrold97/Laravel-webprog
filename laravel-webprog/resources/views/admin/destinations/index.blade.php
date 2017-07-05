@extends('layouts.app')
@section('content')
<div class="container" id="app">
    <div>
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('destination.create') }}" class="btn btn-success" @click="modal"> @{{ message }}</a>
        </div>
    </div>
    <hr>
    @foreach($destinations as $destination)
    <div class="row">
        <div class="col-md-12">
            <p><strong>{{ $destination->dname }}</strong> <a href="{{ route('destination.edit', ['id' => $destination->id]) }}">Edit</a>
            <a href="{{ route('destination.destroy', ['id' => $destination->id]) }}">Delete</a></p>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection


@section('modals')
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
        <div id="modal-dialog" class="modal-dialog  modal-lg" role="document">
        
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

@section('scripts')
<script>
new Vue({
   el: '#app',
   data: {
   message: 'Add'
   }
});
</script>
@endsection
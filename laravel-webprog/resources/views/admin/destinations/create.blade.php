@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('destination.store') }}" method="post">
                <div class="form-group">
                    <label for="dname">Name</label>
                    <input type="text" class="form-control" id="dname" name="dname">
                </div>
                <div class="form-group">
                    <label for="dlocation">Location</label>
                    <input type="text" class="form-control" id="dlocation" name="dlocation">
                </div>
                <div class="form-group">
                    <label for="ddesc">Description</label>
                    <input type="text" class="form-control" id="ddesc" name="ddesc">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
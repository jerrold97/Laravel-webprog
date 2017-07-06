<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $title }}</h4>
    </div>
    @if($type=="CREATE")
        {!! Form::open(array ('id'=>'add_form', 'class'=>'form-horizontal', 'route'=>'destination.store') ) !!}
    @elseif($type=="EDIT")
     {!! Form::model($destination, array ('id'=>'edit_form', 'class'=>'form-horizontal', 'route'=>array('destination.update',$destination->destinations_id), 'method'=>'PUT') ) !!}
        <input type="hidden" name="id" id="id" value="{{ $destination->destinations_id }}">
    @else
        {!! Form::model($destination, array ('id'=>'view_form', 'class'=>'form-horizontal', 'route'=>'destination.index' )) !!}
    @endif
            <div class="modal-body">
                <div class="form-group">
                <div class="col-sm-2">

               {!!Form::label('dname', 'Destination Name', array('class' => 'form-label')); !!}
               </div>
               <div class="col-sm-10">
               {!!Form::text('dname', null, array(
                'class' => 'form-control', 
                'id' => 'dname',
                'placeholder'=>'Destination Name', 
                'required' => true, 
                'maxlength' => 15)); !!}
               </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('dlocation', 'Location', array('class' => 'form-label')); !!}
                    </div>
                   <div class="col-sm-10">
                   {!!Form::text('dlocation', null, array(
                    'class' => 'form-control', 
                    'id' => 'dlocation',
                    'placeholder'=>'Location', 
                    'required' => true, 
                    'maxlength' => 15)); !!}
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-2">
                {!!Form::label('ddesc', 'Description', array('class' => 'form-label')); !!}
                </div>
                <div class="col-sm-10">
               {!!Form::text('ddesc', null, array(
                'class' => 'form-control', 
                'id' => 'ddesc',
                'placeholder'=>'Description', 
                'required' => true, 
                'maxlength' => 15)); !!}
                </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="submit_button" type="submit" class="btn {{$action}}">{{$button_text}}</button>
                </div>
            </div>
   
    {!! Form::close() !!}
</div><!-- /.modal-content -->

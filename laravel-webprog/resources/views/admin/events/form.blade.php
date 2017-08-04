<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $title }}</h4>
    </div>
    @if($type=="CREATE")
        {!! Form::open(array ('id'=>'add_form', 'class'=>'form-horizontal', 'route'=>'event.store') ) !!}
    @elseif($type=="EDIT")
     {!! Form::model($event, array ('id'=>'edit_form', 'class'=>'form-horizontal', 'route'=>array('event.update',$event->event_id), 'method'=>'PUT') ) !!}
        <input type="hidden" name="id" id="id" value="{{ $event->event_id }}">
    @else
        {!! Form::model($event, array ('id'=>'view_form', 'class'=>'form-horizontal', 'route'=>'event.index' )) !!}
    @endif
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkarticle_province', 'Province', array('class' => 'form-label')); !!}
                    </div>
               <div class="col-sm-10">
               <select name="fkarticle_province" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                    @foreach($provinces as $province)
                    <option  value="{{ $province->provinces_id }}">{{$province->province}}</option>
                    @endforeach
                </select>
               </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkevent_municipality', 'Municipality', array('class' => 'form-label')); !!}
                    </div>
                   <div class="col-sm-10">
                   <select name="fkevent_municipality" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        @foreach($municipalities as $municipality)
                        <option  value="{{ $municipality->municipality_id }}">{{$municipality->municipality}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>


                <div class="form-group">
                   <div class="col-sm-2">
                   {!!Form::label('event_name', 'Event Name', array('class' => 'form-label')); !!}
                   </div>

                   <div class="col-sm-10">
                   {!!Form::text('event_name', null, array(
                    'class' => 'form-control', 
                    'id' => 'event_name',
                    'placeholder'=>'Event Name', 
                    'required' => true, 
                    'maxlength' => 45)); !!}
                   </div>
                </div>

                <div class="form-group">
                   <div class="col-sm-2">
                   {!!Form::label('event_desc', 'Event Description', array('class' => 'form-label')); !!}
                   </div>

                   <div class="col-sm-10">
                   {!!Form::textarea('event_desc', null, array(
                    'size' => '30x5',
                    'class' => 'form-control', 
                    'id' => 'event_desc',
                    'placeholder'=>'Event Description', 
                    'required' => true, 
                    'maxlength' => 150)); !!}
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

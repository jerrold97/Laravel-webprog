<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $title }}</h4>
    </div>
    @if($type=="CREATE")
        {!! Form::open(array ('id'=>'add_form', 'class'=>'form-horizontal', 'route'=>'official.store') ) !!}
    @elseif($type=="EDIT")
     {!! Form::model($official, array ('id'=>'edit_form', 'class'=>'form-horizontal', 'route'=>array('official.update',$official->official_id), 'method'=>'PUT') ) !!}
        <input type="hidden" name="id" id="id" value="{{ $official->official_id }}">
    @else
        {!! Form::model($official, array ('id'=>'view_form', 'class'=>'form-horizontal', 'route'=>'official.index' )) !!}
    @endif
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkofficial_province', 'Province', array('class' => 'form-label')); !!}
                    </div>
               <div class="col-sm-10">
               <select name="fkofficial_province" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                    @foreach($provinces as $province)
                    <option  value="{{ $province->provinces_id }}">{{$province->province}}</option>
                    @endforeach
                </select>
               </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkofficial_municipality', 'Municipality', array('class' => 'form-label')); !!}
                    </div>
                   <div class="col-sm-10">
                   <select name="fkofficial_municipality" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        @foreach($municipalities as $municipality)
                        <option  value="{{ $municipality->municipality_id }}">{{$municipality->municipality}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>


                <!-- NAME -->
                <div class="form-group">
                    <div class="col-md-2">
                        {!!Form::label('official_first', 'Name', array(
                            'class' => 'form-label',
                        )); !!}
                    </div>
                    <div class="col-md-10 no-padding">
                        <div class="col-md-4"><p>
                        {!!Form::text('official_first', null, array(
                            'class' => 'form-control',
                            'id' => 'official_first',
                            'placeholder'=>'First Name',
                            'maxlength' => 45,
                            'required' => true
                        )); !!}
                        </p></div><div class="col-md-4"><p>
                        {!!Form::text('official_middle', null, array(
                            'class' => 'form-control',
                            'id' => 'official_middle',
                            'placeholder'=>'Middle Name',
                            'maxlength' => 45,
                            'required' => true,
                        )); !!}
                        </p></div><div class="col-md-4"><p>
                        {!!Form::text('official_last', null, array(
                            'class' => 'form-control',
                            'id' => 'official_last',
                            'placeholder'=>'Last Name',
                            'maxlength' => 45,
                            'required' => true,
                        )); !!}
                        </p></div>
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

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
                    {!!Form::label('fkofficial_province', 'Province', array('class' => 'form-label')); !!}
                    </div>

                   <div class="col-sm-10 prov">
                   <select name="fkofficial_province" id="fkofficial_province" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        @foreach($provinces as $province)
                        <option  value="{{ $province->provinces_id }}">{{$province->province}}</option>
                        @endforeach
                    </select>
                   </div>
               </div>
               @if($type == "CREATE")
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkofficial_municipality', 'Municipality', array('class' => 'form-label')); !!}
                    </div>

                   <div class="col-sm-10">
                   <select name="fkofficial_municipality" id="fkofficial_municipality" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        
                    </select>
                    </div>
                </div>

                @elseif($type == "EDIT")
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkofficial_municipality', 'Municipality', array('class' => 'form-label')); !!}
                    </div>

                   <div class="col-sm-10">
                   <select name="fkofficial_municipality" id="fkofficial_municipality" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        @foreach($municipalities->where('fkmunicipality_provinces', $destination->barangay->municipality->province->provinces_id) as $municipality)
                        <option value="{{$municipality->municipality_id }}" {{ $destination->barangay->municipality->municipality_id == $municipality->municipality_id ? 'selected="selected"' : '' }}>{{$municipality->municipality}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                @endif

                @if($type == "CREATE")
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkdestination_barangays', 'Barangay', array('class' => 'form-label')); !!}
                    </div>

                   <div class="col-sm-10">
                   <select id="fkdestination_barangays" name="fkdestination_barangays" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">

                    </select>
                    </div>
                </div>
                @elseif($type == "EDIT")
                <div class="form-group">
                    <div class="col-sm-2">
                    {!!Form::label('fkdestination_barangays', 'Barangay', array('class' => 'form-label')); !!}
                    </div>

                   <div class="col-sm-10">
                   <select id="fkdestination_barangays" name="fkdestination_barangays" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        @foreach($barangays->where('fkbarangays_municipalities', $destination->barangay->municipality->municipality_id) as $barangay)
                        <option  value="{{ $barangay->barangays_id }}" {{ $destination->barangay->barangays_id == $barangay->barangays_id? 'selected="selected"' : '' }}>{{$barangay->barangay_name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                @endif



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
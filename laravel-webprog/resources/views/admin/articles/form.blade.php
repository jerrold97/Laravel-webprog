<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $title }}</h4>
    </div>
    @if($type=="CREATE")
        {!! Form::open(array ('id'=>'add_form', 'class'=>'form-horizontal', 'route'=>'article.store') ) !!}
    @elseif($type=="EDIT")
     {!! Form::model($article, array ('id'=>'edit_form', 'class'=>'form-horizontal', 'route'=>array('article.update',$article->article_id), 'method'=>'PUT') ) !!}
        <input type="hidden" name="id" id="id" value="{{ $article->article_id }}">
    @else
        {!! Form::model($article, array ('id'=>'view_form', 'class'=>'form-horizontal', 'route'=>'article.index' )) !!}
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
                    {!!Form::label('fkarticle_municipality', 'Municipality', array('class' => 'form-label')); !!}
                    </div>
                   <div class="col-sm-10">
                   <select name="fkarticle_municipality" class="form-control"  data-size="auto"  data-width="100%" data-live-search="true">
                        @foreach($municipalities as $municipality)
                        <option  value="{{ $municipality->municipality_id }}">{{$municipality->municipality}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>


                <div class="form-group">
                   <div class="col-sm-2">
                   {!!Form::label('article_name', 'Article Name', array('class' => 'form-label')); !!}
                   </div>

                   <div class="col-sm-10">
                   {!!Form::text('article_name', null, array(
                    'class' => 'form-control', 
                    'id' => 'article_name',
                    'placeholder'=>'Article Name', 
                    'required' => true, 
                    'maxlength' => 45)); !!}
                   </div>
                </div>

                <div class="form-group">
                   <div class="col-sm-2">
                   {!!Form::label('article_desc', 'Article Description', array('class' => 'form-label')); !!}
                   </div>

                   <div class="col-sm-10">
                   {!!Form::textarea('article_desc', null, array(
                    'size' => '30x5',
                    'class' => 'form-control', 
                    'id' => 'article_desc',
                    'placeholder'=>'Article Description', 
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

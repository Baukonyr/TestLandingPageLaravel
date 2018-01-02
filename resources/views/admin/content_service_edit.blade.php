<div class="wrapper container-fluid">
{!! Form::open(['url'=>route('servicesEdit', array('services'=>$services['id'])), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

  <div class="form-group">
    {!! Form::label('name' , 'Название', ['class'=>'col-xs-2 control-label']) !!}
      <div class="col-xs-8">
        {!! Form::text('name', $services['name'], ['class'=>'form-control']) !!}
      </div>
  </div>
  
  <div class="form-group">
  {!! Form::label('text', 'текст' , ['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
    {!! Form::text('text', $services['text'], ['class'=>'form-control']) !!}
    </div>
  </div>
  
  <div class="form-group">
  {!! Form::label('icon', 'Иконка', ['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
      {!! Form::select('icon', ['fa-android'=>'fa-android', 'fa-apple'=>'fa-apple', 'fa-html5'=>'fa-html5', 'fa-dropbox'=>'fa-dropbox', 'fa-slack'=>'fa-slack', 'fa-users'=>'fa-users'], $services['icon'], ['class'=>'form-control'] ) !!}
    </div>
  </div>
 
  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
    </div>
  </div>
  
  {!! Form::close() !!}
</div>
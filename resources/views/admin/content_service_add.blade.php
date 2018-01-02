<div class="wrapper container-fluid">
{!! Form::open(['url'=>route('servicesAdd'), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Название проекта', ['class'=>'col-xs-2 control-label']) !!}
    
      <div class="col-xs-8">
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите названия проекта']) !!}
      </div>
      
  </div>
  
  <div class="form-group">
    {!! Form::label('text', 'Текст:', ['class'=>'col-xs-2 control-label']) !!}
    
      <div class="col-xs-8">
        {!! Form::textarea('text', old('text'), ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Введите текст сервиса']) !!}
      </div>
      
  </div>
  
  <div class="form-group">
  {!! Form::label('icon', 'Иконка', ['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
      {!! Form::select('icon', ['fa-android'=>'fa-android', 'fa-apple'=>'fa-apple', 'fa-html5'=>'fa-html5', 'fa-dropbox'=>'fa-dropbox', 'fa-slack'=>'fa-slack', 'fa-users'=>'fa-users'], 'fa-android', ['class'=>'form-control'] ) !!}
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
    </div>
  </div>

{!! Form::close() !!}

<script>
  CKEDITOR.replace('editor');
</script>
</div>
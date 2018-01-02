<div class="wrapper container-fluid">
{!! Form::open(['url'=>route('portfolioAdd'), 'class'=>'form-horizontal', 'nethod'=>'post', 'enctype'=>'multipart/form-data']) !!}

  <div class="form-group">
    {!! Form::label('name', 'Название проекта', ['class'=>'col-xs-2 control-label']) !!}
    
      <div class="col-xs-8">
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите названия проекта']) !!}
      </div>
      
  </div>
  
  <div class="form-group">
    {!! Form::label('filter', 'Название фильтра', ['class'=>'col-xs-2 control-label']) !!}
    
      <div class="col-xs-8">
        {!! Form::text('filter', old('filter'), ['class'=>'form-control', 'placeholder'=>'Введите Название фильтра']) !!}
      </div>
      
  </div>
  
  <div class="form-group">
    {!! Form::label('images', 'Изображения', ['class'=>'col-xs-2 control-label']) !!}
    
      <div class="col-xs-8">
        {!! Form::file('images', old('images'), ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файла нет']) !!}
        
      </div>
  </div>
  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
    </div>
  </div>

{!! Form::close() !!}
</div>
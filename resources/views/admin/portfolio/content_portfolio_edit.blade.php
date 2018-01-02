<div class="wrapper container-fluid">
{!! Form::open(['url'=>route('portfolioEdit', array('portfolio'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

  <div class="form-group">
    {!! Form::hidden('id', $data['id']) !!}
    {!! Form::label('name' , 'Название', ['class'=>'col-xs-2 control-label']) !!}
    
      <div class="col-xs-8">
        {!! Form::text('name', $data['name'], ['class'=>'form-control', 'plaseholder'=>'Введите названия проекта']) !!}
      </div>
  </div>
  
  <div class="form-group">
    {!! Form::label('filter', 'Название Фильтра', ['class'=>'col-xs-2 control-label']) !!}
    
    <div class="col-xs-8">
      {!! Form::text('filter', $data['filter'], ['class'=>'form-control', 'plaseholder'=>'Введите названия фильтра']) !!}
    </div>
  </div>
  
  <div class="form-grope">
    {!! Form::label('old_images', 'Изображения', ['class'=>'col-xs-2']) !!}
    
    <div class="col-xs-offset-2 col-xs-10">
      {!! Html::image('assets/img/' . $data['images'], '') !!}
        {!! Form::hidden('old_images', $data['images']) !!}
    </div>
  </div>
  
  <div class="form-group">
    {!! Form::label('image', 'Изображения', ['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
    {!! Form::file('images', old('text'), ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>"btn-primary", 'data-placeholder'=>"Файла нет"]) !!}}
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
    </div>
  </div>
  
  {!! Form::close() !!}
</div>
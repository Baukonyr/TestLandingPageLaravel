<div style="margin: 0px 50px 0px 50px;">

@if($services)
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>№ р/р</th>
        <th>Название</th>
        <th>Текст</th>
        <th>Дата Создания</th>
        <th>Удалить</th>
      </tr>
    </thead>
  
  
  <tbody>
  
  @foreach($services as $k => $service)
    <tr>
    
      <th>{{$service->id}}</th>
      <th>{!! Html::link(route('servicesEdit', ['service'=>$service->id]), $service->name, ['alt'=>$service->name]) !!}</th>
      <th>{!! $service->text !!}</th>
      <th>{{$service->created_at}}</th>
      <td>
          {!! Form::open(['url'=>route('servicesEdit', ['service'=>$service->id], $service->name, ['alt'=>$service->name]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
          
          {{method_field('DELETE')}}
          {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'sybmit']) !!}
            
          
          {!! Form::close() !!}
      </td>
      
    </tr>
  @endforeach
  
  
    </tbody>
  </table>
@endif


{!! Html::link(route('servicesAdd'), 'Добавить сервисы') !!}
</div>
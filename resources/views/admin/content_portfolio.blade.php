<div style="margin: 0px 50px 0px 50px;">

@if($portfolio)
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>№ р/р</th>
        <th>Название</th>
        <th>фильтр</th>
        <th>Дата Создания</th>
        <th>Удалить</th>
      </tr>
    </thead>
  
  
  <tbody>
  
  @foreach($portfolio as $k => $portfolios)
    <tr>
    
      <th>{{$portfolios->id}}</th>
      <th>{!! Html::link(route('portfolioEdit', ['portfolio'=>$portfolios->id]), $portfolios->name, ['alt'=>$portfolios->name]) !!}</th>
      <th>{{$portfolios->filter}}</th>
      <th>{{$portfolios->created_at}}</th>
      <td>
          {!! Form::open(['url'=>route('portfolioEdit', ['portfolio'=>$portfolios->id], $portfolios->name, ['alt'=>$portfolios->name]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
          
          {{method_field('DELETE')}}
          {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'sybmit']) !!}
            
          
          {!! Form::close() !!}
      </td>
      
    </tr>
  @endforeach
  
  
  
  </tbody>
  </table>
@endif


{!! Html::link(route('portfolioAdd'), 'Добавить Проекты') !!}
</div>
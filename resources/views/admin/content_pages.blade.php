<div style="margin: 0px 50px 0px 50px;">

 @if($pages)

   <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>№ p/p </th>
          <th>Имя </th>
          <th>Псевдоним</th>
          <th>Текст</th>
          <th>Дата создания</th>
          <th>Удалить</th>
        </tr>
      </thead>
    <tbody>
    
    @foreach($pages as $k => $page)
    
      <tr>
        <td>{{$page->id}}</td>
        <td>{!!Html::link(route('PagesEdit', ['page'=>$page->id]), $page->name, ['alt'=>$page->name])!!}</td>
        <td>{{$page->alias}}</td>
        <td>{{$page->text}}</td>
        <td>{{$page->created_at}}</td>
      
    <td>
    {!! Form::open(['url'=>route('PagesEdit', ['page'=>$page->id], $page->name, ['alt'=>$page->name]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
    
    {{method_field('DELETE')}}
    {!! Form::button('Удалить', ['class'=>'btn btn-danger', 'type'=>'sybmit']) !!}
      
    
    {!! Form::close() !!}
    </td>
    </tr>
    @endforeach
    
    </tbody>
    </table>
  @endif
  {!!Html::link(route('pagesAdd'), 'Новая Страница')!!}
</div>
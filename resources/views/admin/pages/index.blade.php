@component('admin.layouts.elements.body') 
	@slot('titulo') Páginas @endslot
	@slot('descricao') Adminitração de páginas @endslot 
<a href="{{route('pages.create')}}" class="btn btn-primary">Novo</a><br><br>

<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col" class="text-center">Ações</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($pages as $page)
	    <tr>
	      <th>{{$page->id}}</th>
	      <td>{{$page->titulo}}</td>
	      <td class="text-center"> 
          <a href="{{route('pages.show', $page->id)}}" class="btn btn-outline-success btn-xs">
         <span class="glyphicon glyphicon-plus"></span> </a>
       </td>
	    </tr>
	@endforeach
  </tbody>
</table>

 <div class="text-center">{{$pages->links()}}</div>

@endcomponent


@component('admin.layouts.elements.body') 
	@slot('titulo') Páginas @endslot
	@slot('descricao') Exibição de páginas @endslot 

	<h4>{{$page->titulo}}</h4>

	<p>
		<small>
			Criado em {{ $page->created_at->format('d/m/Y H:i:s')}} | Atualizado em {{ $page->updated_at }}
		</small>
	</p>

	<hr>

	{!! $page->conteudo!!}

	<br><br>

	<a href="{{route('pages.index')}}" class="btn btn-xs btn-default">Voltar</a>
	<a href="{{route('pages.edit', $page->id)}}" class="btn btn-xs btn-default">Editar</a>

	<form action="{{route('pages.destroy', $page->id)}}" class="form-horizontal" method="post" style="display: inline-block;">
		{!! csrf_field() !!}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="Excluir" class="btn btn-xs btn btn-danger" >
	</form>


@endcomponent
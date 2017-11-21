@component('admin.layouts.default')
<h3 style="color: white">{{$titulo}} <small style="color: white;">{{$descricao}}</small></h3>

<div class="panel panel-default">
	<div class="panel-body">
		{{$slot}}
	</div>
</div>

@endcomponent
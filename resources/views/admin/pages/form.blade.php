{!! csrf_field() !!}
<div class="form-group">
    <label for="nome" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $page->nome ?? '' }}" placeholder="Nome...">
    </div>
</div>
<div class="form-group">
    <label for="titulo" class="control-label col-sm-2">Titulo</label>
    <div class="col-sm-10">
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $page->titulo ?? '' }}" placeholder="titulo...">
    </div>
</div>
<div class="form-group">
    <label for="conteudo" class="control-label col-sm-2">Conteúdo</label>
    <div class="col-sm-10">
        <textarea name="conteudo" id="conteudo" cols="30" rows="10" class="form-control" placeholder="Conteúdo...">{{ $page->conteudo ?? '' }}</textarea>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-primary">
    </div>
</div>
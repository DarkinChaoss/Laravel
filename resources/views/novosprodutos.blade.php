@extends('layout.app', ["current"=>"categorias"])

@section('body')
<div class="card border">
	<div class="card-body">
		<form action="/produtos" method="post">
			@csrf
			<div class="form-group">
				<label for="nomeCategoria">Nome da produto</label>
				<input type="text" class="form-control" name="nomeProduto" id="nome" 
				placeholder="nome">
			</div>
			<div class="form-group">
				<label for="nomeCategoria">Digite o estoque atual do produto</label>
				<input type="text" class="form-control" name="estoque" id="estoque" 
				placeholder="estoque">
			</div>
			<div class="form-group">
				<label for="nomeCategoria">Digite o valor de venda</label>
				<input type="text" class="form-control" name="preco" id="preco" 
				placeholder="Preço">
			</div>
			<div class="form-group">
				<label for="nomeCategoria">Selecione a qual categoria o produto pertence</label>
				<select name="idCat" class="form-control">
    			@foreach($cats as $cats)<option value="{{$cats->id}}">{{$cats->name}} </option>@endforeach
  				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
		</form>
	</div>
</div>
@endsection
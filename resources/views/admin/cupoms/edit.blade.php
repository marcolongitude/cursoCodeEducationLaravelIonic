@extends('app')
@section('content')

	<div class="container">
		<h3>Editando Categoria: {{ $category->name }}</h3><br>

		@include('errors._check')

		{!! Form::model($category, ['route' => ['admin.categories.update', $category->id]])!!}

			@include('admin.categories._form')

			<div class="form-group">		
				
				{!! Form::submit('Salvar categoria', ['class'=>'btn btn-primary'] ) !!}

			</div>			

		{!! Form::close() !!}
		
	</div>
	
	

@endsection
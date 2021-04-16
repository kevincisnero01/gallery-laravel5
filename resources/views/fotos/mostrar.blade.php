@extends('app')

@section('content')

<div class="container-fluid">
	<p><a href="/validado/fotos/crear-foto" class="btn btn-primary" role="button">Crear foto</a></p>
	@if(sizeof($fotos) > 0)
		@foreach($fotos as $foto)
		<div class="row">
			<div class="col-sm-6 col-md-12">
				<div class="thumbnail">
					<div class="caption">
						<h3>{{ $foto->nombre }}</h3>
						<p><a href="/validado/fotos?id={{$foto->id}}" class="btn btn-primary" role="button">Ver Foto</a></p>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	@else
		<div class="alert alert-danger">
			<p>Al parecer no tienes fotos, Crea uno.</p>
		</div>
	@endif
</div>
@endsection
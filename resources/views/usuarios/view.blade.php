@extends('adminlte::page')

@section('title', 'Saga- Editar')

@section('js')
<script type="text/javascript" src="{{ asset('js/usuarios/form-usuarios.js') }}" ></script>
@stop

@section('content_header')
    <h1>Usuários SAGA</h1>
@stop


@section('content')


 <div class="box box-solid box-primary">
 	 <div class="box-header with-border">
 	 	<div class="box-title">
 	 		<i class="fa fa-money"></i> Teste
 		</div>
 	</div>

	<div class="box-body">
				<p> Usuário: {{$usuario->id}}

			
	</div>			
</div>		
@stop

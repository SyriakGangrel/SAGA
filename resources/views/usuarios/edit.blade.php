@extends('adminlte::page')

@section('title', 'Saga- Editar')

@section('js')
<script type="text/javascript" src="{{ asset('js/usuarios/form-usuarios.js') }}" ></script>
@stop

@section('content_header')


@stop


@section('content')


 <div class="box box-primary">
 	 <div class="box-header with-border">
 	 	<div class="box-title">
 	 		<i class="fa fa-user"></i> Edição - 
 	 		<small><b>{{$usuario->name}}</b></small>
 		</div>
 		    <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
 	</div>

	<div class="box-body">

	            	<div class="form-group col-md-4 col-sm4 col-xs-12 required ">
	                	<label>CPF:</label>
	                	<div class="input-group">
	                 		<div class="input-group-addon">
	                    		<i class="fa fa-phone"></i>
	                  		</div>
	                  	<input type="text" class="form-control telefone" value="{{$usuario->cpf}}" readonly="">
	                	</div>
		            </div>
	   
	            	<div class="form-group col-md-4 col-sm4 col-xs-12 required ">
	                	<label>Criado em: </label>
	                	<div class="input-group">
	                  		<div class="input-group-addon">
	                    		<i class="fa fa-calendar"></i>
	                  		</div>
	                  		<input type="text" class="form-control date" value="{{$usuario->created_at}}" readonly="">
	                	</div>
	            	</div>

	            	<div class="form-group col-md-4 col-sm4 col-xs-12 required ">
	                	<label>Atualizado em: </label>
	                	<div class="input-group">
	                  		<div class="input-group-addon">
	                    		<i class="fa fa-calendar"></i>
	                  		</div>
	                  		<input type="text" class="form-control date" value="{{$usuario->updated_at}}" readonly="">
	                	</div>
	            	</div>

	            	<div class="form-group col-md-4 col-sm4 col-xs-12 required ">
	                	<label>Nome:</label>
	                	<div class="input-group">
	                 		<div class="input-group-addon">
	                    		<i class="fa fa-phone"></i>
	                  		</div>
	                  	<input type="text" class="form-control telefone" value="{{$usuario->name}}">
	                	</div>
		            </div>

	            	<div class="form-group col-md-4 col-sm4 col-xs-12 required ">
	                	<label>E-mail:</label>
	                	<div class="input-group">
	                 		<div class="input-group-addon">
	                    		<i class="fa fa-phone"></i>
	                  		</div>
	                  	<input type="text" class="form-control telefone" value="{{$usuario->email}}">
	                	</div>
		            </div>

	            	<div class="form-group col-md-4 col-sm4 col-xs-12 required ">
	                	<label>Telefone:</label>
		                <div class="input-group">
	                		<div class="input-group-addon">
	                    		<i class="fa fa-laptop"></i>
	                  		</div>
	                  	<input type="text" class="form-control telefone" value="{{$usuario->telefone}}" >
	                	</div>
	            	</div>
	            	<div class="form-group pull-right col-md-4 col-sm4 col-xs-12">
						@include('usuarios.partials._action')
	            	</div>
	            </div>
	</div>			


@stop

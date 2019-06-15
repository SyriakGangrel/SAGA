@extends('adminlte::page')

@section('title', 'Saga- Edição')

@section('js')
	
@stop

@section('content_header')



@stop


@section('content')

<div class="box box-primary">
	<div class="box-header">
	    <h4 class="box-title"> <i class="fa fa-globe"></i> <b> {{ $pagina->name }} </b> Edição</h4>
	    <small class="pull-right">Data de Criação: {{ $pagina->created_at }}</small>
	</div>            
	<div class="box-body">

		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Nome:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value=" {{ $pagina->name }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Telefone:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $pagina->telefone }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Criado em:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $pagina->created_at }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Atualizado em:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $pagina->updated_at }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Atualizado por:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $modificador->name }}" readonly="">
			</div>
		</div>    
		<div class="form-group col-md-1 col-sm-1 col-xs-12 required">
			<a href="{{route('paginas')}}"type="button" class="btn btn-block btn-primary" style="margin-top: 25px">Voltar</a> 
		</div>
	</div>
</div>


@stop
@extends('adminlte::page')

@section('title', 'Saga- Edição')

@section('js')
	
@stop

@section('content_header')



@stop


@section('content')

{{ Form::model($pagina,[
		'action' => ['PaginasController@store', $pagina->id],
		'id' => 'form-pagina',
		'method' => 'POST',
		'files' => true
	]) 
}}

{{ Form::hidden('pagina_id', @$pagina->id,[
		'class' => 'form-control',
		'id' => 'pagina_id'
	])
}}

{{ Form::hidden('usuario_id', Auth::user()->id,[
		'class' => 'form-control',
		'id' => 'pagina_id'
	])
}}


<div class="box box-primary">
	<div class="box-header">
	    <h3 class="box-title"> Edição</h3>
	    <small class="label pull-right bg-blue"></small>
	</div>            
	<div class="box-body">

		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Nome:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input  name="nome" type="text" class="form-control" value=" {{ $pagina->name }}">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Telefone:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="telefone" type="text" class="form-control" value="{{ $pagina->telefone }}">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Criado em:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="criado"type="text" class="form-control" value="{{ $pagina->created_at }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Atualizado em:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="atualizado" type="text" class="form-control" value="{{ $pagina->updated_at }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2 col-xs-12 required">
			<label>Atualizado por:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="modificador"type="text" class="form-control" value="{{ $modificador->name }}" readonly="">
			</div>
		</div>    
		<div class="form-group col-md-1 col-sm-1 col-xs-12 required">
			<a href="{{route('paginas')}}"type="button" class="btn btn-block btn-danger" style="margin-top: 25px">Cancelar</a> 
		</div>
		<div class="form-group col-md-1 col-sm-1 col-xs-12 required">
			{{ Form::button('<i class="fa fa-check"></i> Salvar',
				[
					'class' =>'btn btn-block btn-success',
					'type' => 'submit',
					'name' => 'action',
					'value' => 'SALVAR',
					'title' => 'Salvar',
					'onClick' => '$("#act").val(this.value)',
					'style' => 'margin-top: 25px' 
				])
			}}

		</div>	
	</div>
</div>


@stop

@extends('adminlte::page')

@section('title', 'Saga- Cadastro Create')

@section('js')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
@stop

@section('content_header')


@stop

@section('content')


{{ Form::open([
		'action' => 'CadastroController@store',
		'id' => 'form-cadastro',
		'method' => 'POST',
		'files' => true
	]) 
}}


{{ Form::hidden('user_mod', Auth::user()->id,[
		'class' => 'form-control',
		'id' => 'user_mod'
	])
}}



<div class="box box-primary">
	<div class="box-header with-border">
	    <h3 class="box-title"> Inserindo novo cadastro</b></h3>
	    <small class="label pull-right bg-red"></small>
	</div>

	<div class="box-body">

		<div class="form-group col-md-2 col-sm-2 ">
			<label>Matricula:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="matricula" type="text" class="form-control" value="" >
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4">
			<label>Nome:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  		<input name="nome" type="text" class="form-control" value="">
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4">
			<label>Sobrenome:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  		<input name="sobrenome" type="text" class="form-control" value="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>RG/RNE:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="rg" type="text" class="form-control" value="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>CPF:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="cpf" type="text" class="form-control" value="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>Data Nascimento:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="data_nascimento" type="text" class="form-control" value="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2">
			<label>Telefone:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="telefone" type="text" class="form-control" value="">
			</div>
		</div>
		<div class="form-group col-md-4 col-sm-4">
			<label>E-mail:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="email" type="text" class="form-control" value="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2">
			<label>Status:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
				<select name="status" class="form-control select2">
					<option value="A"> Ativo</option>
					<option value="I"> Inativo</option>
				</select>
			</div>
		</div>
	</div>

	<div class="box-footer">

		<div class="form-group pull-right col-md-1 col-sm-1 col-xs-12 required">
			{{ Form::button('<i class="fa fa-check"></i> Salvar',
				[
					'class' =>'btn btn-block btn-success',
					'type' => 'submit',
					'name' => 'action',
					'value' => 'SALVAR',
					'title' => 'Salvar',
					'onClick' => '$("#act").val(this.value)',
				])
			}}
		</div>

		<div class="form-group pull-right col-md-1 col-sm-1 col-xs-12 required">
			<a href="{{route('cadastro')}}"type="button" class="btn btn-block btn-danger">Cancelar</a> 
		</div>

	</div>
</div>

@stop
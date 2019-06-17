@extends('adminlte::page')

@section('title', 'Saga- Cadastro Edit')

@section('js')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
@stop

@section('content_header')

<div class="box-primary">
	<ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('cadastro')}}">Cadastro</a></li>
        <li class="active">Edição</li>
	</ol>
</div>

@stop

@section('content')

{{ Form::model($cadastro,[
		'action' => ['CadastroController@store', $cadastro->id],
		'id' => 'form-cadastro',
		'method' => 'POST',
		'files' => true
	]) 
}}

{{ Form::hidden('cadastro_id', @$cadastro->id,[
		'class' => 'form-control',
		'id' => 'cadastro_id'
	])
}}

<!-- usuario logado -->
{{ Form::hidden('user_mod', Auth::user()->id,[
		'class' => 'form-control',
		'id' => 'user_mod'
	])
}}



<div class="box box-primary">
	<div class="box-header with-border">
	    <h3 class="box-title"> Cadastro: <b> {{$cadastro->nome}} {{$cadastro->sobrenome}} </b></h3>
	    <small class="label pull-right bg-red">Alterado por: <b>{{$modificador->name}}</b> em: {{$cadastro->updated_at}}</small>
	</div>

	<div class="box-body">

		<div class="form-group col-md-2 col-sm-2 ">
			<label>Matricula:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="matricula" type="text" class="form-control" value="{{ $cadastro->matricula }}" >
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4">
			<label>Nome:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  		<input name="nome" type="text" class="form-control" value="{{ $cadastro->nome }}">
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4">
			<label>Sobrenome:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  		<input name="sobrenome" type="text" class="form-control" value="{{ $cadastro->sobrenome }}">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>RG/RNE:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="rg" type="text" class="form-control" value="{{ $cadastro->rg }}">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>CPF:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="cpf" type="text" class="form-control" value="{{ $cadastro->cpf }}">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>Data Nascimento:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="data_nascimento" type="text" class="form-control" value="{{ $cadastro->data_nascimento }}">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2">
			<label>Telefone:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="telefone" type="text" class="form-control" value="{{ $cadastro->telefone }}">
			</div>
		</div>
		<div class="form-group col-md-4 col-sm-4">
			<label>E-mail:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input name="email" type="text" class="form-control" value="{{ $cadastro->email }}">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2">
			<label>Status:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
				<select name="status" class="form-control select2">
					<option @if(@$cadastro->status == 'A') selected @endif value="A"> Ativo</option>
					<option @if(@$cadastro->status == 'I') selected @endif value="I"> Inativo</option>
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
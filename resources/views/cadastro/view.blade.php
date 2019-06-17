@extends('adminlte::page')

@section('title', 'Saga- Cadastro View')

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
        <li class="active">Visualização</li>
	</ol>
</div>

@stop

@section('content')

<div class="box box-primary">
	<div class="box-header with-border">
	    <h3 class="box-title"> Cadastro: <b> {{$cadastro->nome}} {{$cadastro->sobrenome}} </b></h3>
	    <small class="label pull-right bg-green">Alterado por: <b>{{$modificador->name}}</b> em: {{$cadastro->updated_at}}</small>
	</div>            
	<div class="box-body">

		<div class="form-group col-md-2 col-sm-2 ">
			<label>Matricula:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->matricula }}"readonly="">
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4">
			<label>Nome:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  		<input type="text" class="form-control" value="{{ $cadastro->nome }} {{ $cadastro->sobrenome }}"readonly="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>RG/RNE:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->rg }}" readonly="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>CPF:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->cpf }}" readonly="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>Data Nascimento:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->data_nascimento }}"readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2">
			<label>Telefone:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->telefone }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-4 col-sm-4">
			<label>E-mail:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->email }}" readonly="">
			</div>
		</div>
		<div class="form-group col-md-2 col-sm-2">
			<label>Status:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
				<select class="form-control select2" readonly="" disabled="">
					<option @if(@$cadastro->status == 'A') selected @endif value="A"> Ativo</option>
					<option @if(@$cadastro->status == 'I') selected @endif value="I"> Inativo</option>
				</select>
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>Criado em:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->created_at }}" readonly="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>Alterado em:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $cadastro->updated_at }}" readonly="">
			</div>
		</div>

		<div class="form-group col-md-2 col-sm-2">
			<label>Alterado por:</label>
		    <div class="input-group">
		    	<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value="{{ $modificador->name}}" readonly="">
			</div>
		</div>
	</div>
	<div class="box-footer">
		<div class="form-group pull-right col-md-1 col-sm-1 col-xs-12 required">
			<a href="{{route('cadastro')}}"type="button" class="btn btn-block btn-primary">Voltar</a> 
		</div>
	</div>
</div>


@stop
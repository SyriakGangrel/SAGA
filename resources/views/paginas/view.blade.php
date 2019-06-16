@extends('adminlte::page')

@section('title', 'Saga- Edição')

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
        <li><a href="#"><i class="fa fa-dashboard"></i> Raiz</a></li>
        <li><a href="#">Local</a></li>
        <li class="active">Pagina</li>
	</ol>
</div>

@stop


@section('content')

<div class="box box-primary">
	<div class="box-header">
	    <h4 class="box-title"> <i class="fa fa-globe"></i> <b> {{ $pagina->name }} </b> Edição</h4>
	    <small class="pull-right">Data de Criação: {{ $pagina->created_at }}</small>
	</div>            
	<div class="box-body">


		<div class="form-group col-md-4 col-sm-4 col-xs-12 required">
			<label>Nome:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control input-lg" value="input-lg" readonly=""><span class="input-group-addon">.00</span>
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4 col-xs-12 required">
			<label>Nome:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control" value=" defaul" readonly=""><span class="input-group-addon">.00</span>
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4 col-xs-12 required">
			<label>Nome:</label>
		    <div class="input-group">
		  	<span class="input-group-addon">$</span><input type="text" class="form-control input-sm" value=" input-sm" readonly="">
			</div>
		</div>

		<div class="form-group col-md-4 col-sm-4 col-xs-12 required">
			<label>Nome:</label>
		    <div class="input-group">
				<div class="input-group-addon">
		    		<i class="fa fa-laptop"></i>
		  		</div>
		  	<input type="text" class="form-control input-sm" value="50"  readonly=""><span class="input-group-addon">.00</span>
			</div>
		</div>

		<div class="form-group has-success col-md-4 col-sm-4 col-xs-12 required">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Adicionado com successo</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="inputSuccess">
                  <span class="help-block">Campo Obrigatorio</span>
        </div>
		<div class="form-group has-warning col-md-4 col-sm-4 col-xs-12 required">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="inputWarning">
                  <span class="help-block">Help block with warning</span>
        </div>

		<div class="form-group has-error col-md-4 col-sm-4 col-xs-12 required">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="inputError">
                  <span class="help-block">Help block with error</span>
        </div>

        <div class="form-group has-primary col-md-4 col-sm-4 col-xs-12 required">
                  <label class="control-label" for="inputPrimary"><i class="fa fa-times"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputPrimary" placeholder="inputPrimary">
                  <span class="help-block">Help block with error</span>
        </div>


        <div class="form-group col-md-12 col-sm-12 col-xs-12 required">
            <label>Titulo do combo:</label>
                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span> <i class="fa fa-calendar"></i> Conteúdo Interno testando com titulo  testando largura </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
        </div>


        <div class="form-group col-md-6 col-sm-6 col-xs-12 required">
            <label>Titulo do combo:</label>
                <div class="input-group">
                	<div class="input-group-addon">
                		<i class="fa fa-laptop"></i>
                	</div>
                		<select class="form-control select2" data-placeholder="Paginas ...">
                			<option disable selected value ></option>
                			@foreach($paginas as $pag)
                				<option value="{{$pag->id}}" >{{$pag->id}} - {{$pag->name}} - {{$pag->telefone}}</option>
                			@endforeach
                		</select>
                	</div>
        </div>



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
@extends('adminlte::page')

@section('title', 'Saga- Usuarios')

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

		<div class="form-group col-md-12 col-sm-12 col-xs-12 required">
			<div class="box box-primary">
	            <div class="box-header">
	              <h3 class="box-title">Tabelas de Usuários</h3>
	            </div>            
	            	<div class="box-body">

						<div class="form-group col-md-12 col-sm12 col-xs-12 required">
							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<div class="table-responsive">
											<table class="table no-margin" id="lista_usuarios">
												<thead>
													<tr>
														<td>Id:</td>
														<td>Nome:</td>
														<td>E-mail:</td>
														<td>Data de criação:</td>
														<td>Atualizado em:</td>
														<td>Ação</td>													
													</tr>
												</thead>
												<tbody>	
												@foreach($usuarios as $usuario)								
													<tr>
														<td style="width: 5%;"> {{$usuario->id}}</td>
														<td style="width: 20%;"> {{$usuario->name}}</td>
														<td style="width: 30%;"> {{$usuario->email}}</td>
														<td style="width: 15%;"> {{$usuario->created_at}}</td>
														<td style="width: 15%;"> {{$usuario->updated_at}}</td>
														<td style="width: 15%;">
															<div class="btn-group">
                      											<a class="btn btn-info" href="{{route('usuarios.view',$usuario->id)}}"> visualizar </a>
                      											<a class="btn btn-primary" href="{{route('usuarios.edit',$usuario->id)}}"> editar </a>
                    										</div>
														</td>
													</tr>
												@endforeach
												</tbody>
											</table>							
										</div>						
									</div>					
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>

		<div class="form-group col-md-4 col-sm4 col-xs-12 required">
			<div class="box box-primary">
	            <div class="box-header">
	              <h3 class="box-title">Esquerda</h3>
	            </div>            
	            <div class="box-body">

	            	<div class="form-group">
	                	<label>Date:</label>
	                	<div class="input-group">
	                  		<div class="input-group-addon">
	                    		<i class="fa fa-calendar"></i>
	                  		</div>
	                  		<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
	                	</div>
	            	</div>

					<div class="form-group">
	                	<label>Telefone:</label>
	                	<div class="input-group">
	                 		<div class="input-group-addon">
	                    		<i class="fa fa-phone"></i>
	                  		</div>
	                  	<input type="text" class="form-control telefone">
	                	</div>
		            </div>

	            	<div class="form-group">
	                	<label>IP:</label>
		                <div class="input-group">
	                		<div class="input-group-addon">
	                    		<i class="fa fa-laptop"></i>
	                  		</div>
	                  	<input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="">
	                	</div>
	            	</div>

	            	<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">OK</button>

	            </div>
	        </div>
	    </div>

		<div class="form-group col-md-4 col-sm4 col-xs-12 required">
			<div class="box box-success">
	            <div class="box-header">
	            	<h3 class="box-title">Centro</h3>
	            </div>

	            <div class="box-body">

	            	<div class="form-group">
	                	<label>Date masks:</label>
	                	<div class="input-group">
	                		<div class="input-group-addon">
	                    		<i class="fa fa-calendar"></i>
	                  		</div>
	                  	<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
	                	</div>
	            	</div>

					<div class="form-group">
	            	    <label>Telefone:</label>
	            	    <div class="input-group">
	            	     	<div class="input-group-addon">
	            	        	<i class="fa fa-phone"></i>
	            	      	</div>
	            	    <input type="text" class="form-control telefone">
	            	    </div>
		        	</div>

	            	<div class="form-group">
	                	<label>IP:</label>
		                <div class="input-group">
	                		<div class="input-group-addon">
	                    		<i class="fa fa-laptop"></i>
	                  		</div>
	                  	<input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="">
	                	</div>
	            	</div>

	            	<button type="button" class="btn btn-block btn-info">OK</button>

	        	</div>
	    	</div>
		</div>
		<div class="form-group col-md-4 col-sm4 col-xs-12 required">
			<div class="box box-danger">
	            <div class="box-header">
	            	<h3 class="box-title">Direita</h3>
	            </div>

	            <div class="box-body">

	            	<div class="form-group">
	                	<label>Date masks:</label>
	                	<div class="input-group">
	                  		<div class="input-group-addon">
	                    		<i class="fa fa-calendar"></i>
	                		</div>
	                  	<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
	                	</div>
	            	</div>
					<div class="form-group">
	            	    <label>Telefone:</label>
	            	    <div class="input-group">
	            	     	<div class="input-group-addon">
	            	        	<i class="fa fa-phone"></i>
	            	      	</div>
	            	    <input type="text" class="form-control telefone">
	            	    </div>
		        	</div>

	            	<div class="form-group">
	                	<label>IP:</label>
		                <div class="input-group">
	                		<div class="input-group-addon">
	                    		<i class="fa fa-laptop"></i>
	                  		</div>
	                  	<input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="">
	                	</div>
	            	</div>

	            	<td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info"> OK </button>
                      <button type="button" class="btn btn-primary"> OK </button>
                      <button type="button" class="btn btn-danger"> OK </button>
                      <button type="button" class="btn btn-warning"> OK </button>
                      <button type="button" class="btn btn-success"> OK </button>
                    </div>
                  </td>

	        	</div>
	    	</div>
		</div>

	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text-red">Editar</h3>

				
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection
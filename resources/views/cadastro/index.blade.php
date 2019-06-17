@extends('adminlte::page')

@section('title', 'Saga- Cadastro Index')

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


<div class="form-group col-md-12 col-sm-12 col-xs-12 required">
			<div class="box box-primary">
	            <div class="box-header with-border">
	                <h2 class="box-title"><i class="fa fa-users"></i> <b>Cadastros</b></h2>
	                <div class="form-group col-md-2 col-sm-2 col-xs-12 pull-right">
						<a class="btn btn-block btn-primary " href="{{route('cadastro.create')}}"> <i class="fa fa-user-plus"></i> Novo Cadastro </a>
	                </div>
	            </div>            

	            	<div class="box-body">

						<div class="form-group col-md-12 col-sm12 col-xs-12 required">
							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<div class="table-responsive">
											<table class="table   no-margin  table-striped" id="lista_usuarios">
												<thead>
													<tr>
														<td><b>Matricula:</b></td>
														<td><b>Nome Completo:</b></td>
														<td><b>Nascimento:</b></td>
														<td><b>Telefone:</b></td>
														<td><b>E-mail:</b></td>
														<td><b>Ação</b></td>													
													</tr>
												</thead>
												<tbody>	
	 											@foreach($cadastros as $cadastro)								
													<tr>
														<td style="width: 8%;"> {{$cadastro->matricula}}</td>
														<td style="width: 30%;"> {{$cadastro->nome}} {{$cadastro->sobrenome}}</td>
														<td style="width: 10%;"> {{$cadastro->data_nascimento}}</td>
														<td style="width: 10%;"> {{$cadastro->telefone}}</td>
														<td style="width: 25%;"> {{$cadastro->email}}</td>
														<td style="width: 17%;">
														<div class="btn-group">
                      										<a class="btn btn-info" href="{{route('cadastro.view',$cadastro->id)}}"> <i class="fa fa-eye"></i>  Visualizar </a>
                      										<a class="btn btn-primary" href="{{route('cadastro.edit',$cadastro->id)}}"> <i class="fa fa-pencil"></i> Editar </a>
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
		<div class="box-footer">
			Teste de Footer
		</div>
			</div>
		</div>


@stop
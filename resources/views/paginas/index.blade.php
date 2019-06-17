@extends('adminlte::page')

@section('title', 'Saga- Páginas')

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
	                <h3 class="box-title"><i class="fa fa-globe"></i> <b>Paginas</b></h3>
	                <div class="form-group col-md-2 col-sm-2 col-xs-12 pull-right">
						<a class="btn btn-block btn-primary " href="{{route('paginas.create')}}"> <i class="fa fa-globe"></i> Nova Pagina </a>
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
														<td>Id:</td>
														<td>Nome:</td>
														<td>E-mail:</td>
														<td>Data de criação:</td>
														<td>Atualizado em:</td>
														<td>Ação</td>													
													</tr>
												</thead>
												<tbody>	
												@foreach($paginas as $pagina)								
													<tr>
														<td style="width: 5%;"> {{$pagina->id}}</td>
														<td style="width: 20%;"> {{$pagina->name}}</td>
														<td style="width: 30%;"> {{$pagina->telefone}}</td>
														<td style="width: 15%;"> {{$pagina->created_at}}</td>
														<td style="width: 15%;"> {{$pagina->updated_at}}</td>
														<td style="width: 15%;">
															<div class="btn-group">
                      											<a class="btn btn-info" href="{{route('paginas.view',$pagina->id)}}"> visualizar </a>
                      											<a class="btn btn-primary" href="{{route('paginas.edit',$pagina->id)}}"> editar </a>
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
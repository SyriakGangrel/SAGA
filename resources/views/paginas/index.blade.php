@extends('adminlte::page')

@section('title', 'Saga- Usuarios')

@section('js')
	
@stop

@section('content_header')


@stop
@section('content')

<div class="form-group col-md-12 col-sm-12 col-xs-12 required">
			<div class="box box-primary">
	            <div class="box-header">
	              <h3 class="box-title"><i class="fa fa-globe"></i> <b>Paginas</b></h3>
	            	<div class="box-tools">
                		<div class="input-group input-group-sm" style="width: 150px;">
                  			<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                			<div class="input-group-btn">
                    			<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  			</div>
                		</div>
        			</div>  
	            <small class="label pull-right bg-blue"></small>
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
			</div>
		</div>
@stop
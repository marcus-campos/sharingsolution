@extends('Admin/masteradmin')
@section('container')
 	@parent
		<div class="box">
		    <div class="box-header with-border">
		      <h3 class="box-title">Soluções cadastradas</h3>
		      <div class="box-tools pull-right">
		        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
		      </div>
		    </div>
		    <div class="box-body">
		    	<center><a href="#" class="btn btn-default" data-toggle="modal" data-target="#newProduct">Nova solução</a></center>
		      	<div class="box-body">
			      	<table id="data" class="table table-bordered table-hover">
				        <thead>
				          <tr>
				            <th>Codigo</th>
				            <th>Titulo</th>
				            <th>Ultima alteração</th>
				          </tr>
				        </thead>
				        <tbody>
				        @foreach($solucoes as $sl)
				          <tr>
				            <td>{{ $sl->id }}</td>
				            <td>{{ $sl->titulo }}</td>
				            <td>{{ $sl->data_update }}</td>
				          </tr>
						</tbody>
						@endforeach
					</table>
				</div>
		    </div><!-- /.box-body -->

                            <div id="newProduct" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
                                            <h3>Nova solução</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="block-product-detail">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                                                        <div class="product-detail-section">
                                                            <div class="product-information">
                                                               <div class="clearfix">
                                                              		<label class="pull-left">Titulo:</label>
                                                                    {!! Form::text('name', '',['class' => 'form-control']) !!}
                                                                </div>
                                                                <div class="clearfix">
                                                                	<label class="pull-left">Descrição:</label>
                                                                    {!! Form::textarea('description', '',['class' => 'form-control']) !!}
                                                                </div>                          
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-default" data-dismiss="modal">Fechar</button>
                                          </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->

		</div><!-- /.box -->
		</div>
		</div>
		</div>
		
@stop
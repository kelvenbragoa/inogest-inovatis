	<!-- Modal -->
    <div id="modalExemplo" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->

										<div class="modal-content">
                                            <div class="modal-header">
                                                
                                                <h4 class="modal-title">{{__('text.process_salary')}}</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form method="POST" action="{{route('process_salary.store')}}">
                                                @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                <label for="id_produto">{{__('text.month_reference')}}</label>
                                                <select class="form-control mr-2" id="month" name="month">
                                                    <option value="Janeiro">Janeiro</option> 
                                                    <option value="Fevereiro">Fevereiro</option>
                                                    <option value="Março">Março</option>
                                                    <option value="Abril">Abril</option>
                                                    <option value="Maio">Maio</option>
                                                    <option value="Junho">Junho</option>
                                                    <option value="Julho">Julho</option>
                                                    <option value="Agosto">Agosto</option>
                                                    <option value="Setembro">Setembro</option>
                                                    <option value="Outubro">Outubro</option>
                                                    <option value="Novembro">Novembro</option>
                                                    <option value="Dezembro">Dezembro</option>
                                                </select>
                                                </div>
                                                
                                                
                                                
                                            
                                            
                                                
                                            </div>
                                                    
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary mb-3">{{__('text.process')}} </button>
    
    
                                                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">{{__('text.close')}} </button>
                                                </form>
    
                                            </div>
                                            </div>
                                            </div>
                                            </div>
<!-- Modal NOITE -->
<div class="modal fade" id="exampleModalNOITE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detalhes turno de noite</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3 class="card-title mb-4">Ligeiros & Pesados: {{count($turno_noite_lp)}}</h3>
                                                              
          <h3 class="card-title mb-4">Profissional: {{count($turno_noite_pro)}}</h3>
                                                              
          <h3 class="card-title mb-4">Total Mês: {{count($turno_noite_mes)}}</h3>
          
          <table class="table">
    <thead>
      <tr>
        <th scope="col">Colaborador</th>
        <th scope="col">Numero Ativações</th>
      </tr>
    </thead>
    <tbody>
        
     @foreach ($user_info_noite as $item)
          
      
      <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->total}}</td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
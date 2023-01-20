<!-- Modal DIA -->
<div class="modal fade" id="precoGeral{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Preço @if ($item->app == 'edclp') EDC MZ Ligeiros e Pesado @endif @if ($item->app == 'edcpro') EDC MZ Profissional @endif @if ($item->app == 'eds') EDS MZ @endif</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('price.update', $item->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Preço</label>
                <input type="number" value="{{$item->amount}}" name="amount" class="form-control">
            </div>
         
          
        
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" >Salvar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
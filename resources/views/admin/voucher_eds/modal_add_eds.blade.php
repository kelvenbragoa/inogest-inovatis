<!-- Modal -->
<div id="modalExemploEds" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Recargas</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <form method="POST" action="{{route('voucher.store')}}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
        <label for="id_produto">Cliente</label>
        <input type="text" class="form-control mr-2" id="value" name="customer" placeholder="Cliente" required>
        </div>
    
        

        <div class="form-group">
            <label for="fornecedor">Codigo</label>
                <input type="number" class="form-control mr-2" id="reason" name="eds" placeholder="Quantidade Codigos EDS" required>
        </div>

        <input type="hidden" value="eds" name="app">
        

      

        
        

    </div>
            
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary mb-3">{{__('text.submit')}} </button>


        <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">{{__('text.close')}} </button>
        </form>

    </div>
    </div>
</div>
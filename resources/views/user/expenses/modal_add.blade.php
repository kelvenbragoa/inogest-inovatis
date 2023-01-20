<!-- Modal -->
<div id="modalExemplo" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">{{__('text.expense')}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <form method="POST" action="{{route('expenses.store')}}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
        <label for="id_produto">{{__('text.amount')}}</label>
        <input type="number" class="form-control mr-2" id="value" name="value" placeholder="{{__('text.amount')}}" required>
        </div>
    
        <div class="form-group">
        <label for="fornecedor">{{__('text.description')}}</label>
            <input type="text" class="form-control mr-2" id="reason" name="reason" placeholder="{{__('text.description')}}" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="txtcidade">{{__('text.category')}}</label>
            <select class="form-control mr-2" id="category_id" name="category_id" value="{{ old('category_id') }}">
               @foreach (App\Models\Category::all() as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
               @endforeach
            </select>
            </div>

      

        
        <div class="form-group">
            <label for="fornecedor">{{__('text.employee')}}</label>
                <input type="text" readonly class="form-control mr-2"  value="{{auth()->user()->name}}"  required>
            </div>

    </div>
            
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary mb-3">{{__('text.submit')}} </button>


        <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">{{__('text.close')}} </button>
        </form>

    </div>
    </div>
</div>
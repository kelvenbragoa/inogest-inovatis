<!-- Modal -->
<div id="modalExemplo" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">{{__('text.customers')}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <form method="POST" action="/searchinvoice">
    @csrf
    <div class="modal-body">
        
        <div class="form-group">
            <label class="form-label" for="txtcidade">{{__('text.customers')}}</label>
            <select class="form-control mr-2" id="costumer_id" name="costumer_id" value="{{ old('category_id') }}">
               @foreach (App\Models\Costumers::all() as $item)
                   <option value="{{$item->id}}">{{$item->name}}</option>
               @endforeach
            </select>
            </div>

      

        
        

    </div>
            
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary mb-3">{{__('text.next')}} </button>


        <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">{{__('text.close')}} </button>
        </form>

    </div>
    </div>
</div>
<!-- Modal -->
<div id="modalExemploCategory" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">{{__('text.category')}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <form method="POST" action="{{route('category.store')}}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
        <label for="id_produto">{{__('text.category')}}</label>
        <input type="text" class="form-control mr-2" id="name" name="name" placeholder="{{__('text.category')}}" required>
        </div>
        
    </div>
            
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary mb-3">{{__('text.submit')}} </button>


        <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">{{__('text.close')}} </button>
        </form>
        <table class="table display">
            <thead>
                <tr>
                    <th style="width:40%;">{{__('text.category')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{$item->name}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    </div>
</div>
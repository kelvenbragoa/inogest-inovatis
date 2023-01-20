<div class="modal" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{__('message.delete_header')}} <br>"{{$item->name}}"</h5>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{__('message.delete_body')}}
        </div>
        
        <div class="modal-footer">
            <form method="POST" action="{{ route('department.destroy', $item->id)}}">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('text.close')}}</button>
                <button type="submit" class="btn btn-danger">{{__('text.submit')}}</button>
            </form>
        </div>

      </div>
    </div>
  </div>
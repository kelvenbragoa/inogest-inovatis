<div class="modal" id="exampleModalCenterSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{__('text.search')}}</h5>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="get" action="/search">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">{{__('text.methodsearch')}}:</label> <br>
              {{__('text.code')}}<input checked type="radio" name="method" value="code"  id="recipient-name">
              {{__('text.mobile')}}<input type="radio" name="method" value="mobile"  id="recipient-name">
              {{__('text.name')}}<input type="radio" name="method" value="name" id="recipient-name">
            </div>
           
            <div class="form-group">
              <label for="message-text" class="col-form-label">{{__('text.search')}}:</label>
              <input class="form-control" id="" name="term" required>
            </div>
        
        </div>
        
        <div class="modal-footer">
            

                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('text.close')}}</button>
                <button type="submit" class="btn btn-info">{{__('text.search')}}</button>
            </form>
        </div>

      </div>
    </div>
  </div>
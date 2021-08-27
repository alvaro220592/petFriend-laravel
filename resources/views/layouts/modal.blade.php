<div class="modal fade" tabindex="-1" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Atenção</h5>
          &nbsp;
          <ion-icon name="warning" class="text-light fs-3 align-middle"></ion-icon> 
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
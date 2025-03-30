<!-- The Modal -->
<div class="modal fade" id="myModal" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content bg-dark text-light">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{$modalTitle}}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div>
          <div class="w-auto d-flex flex-wrap justify-content-start">
              @foreach($equipamentos as $key => $equipamento)
                    <div style="border:1px solid black; border-radius:10px; padding:10px;
                    margin:10px; flex: 1 1 calc(33.33% - 20px); max-width:calc(33.33% - 20px);">
                        @foreach($equipamento as $campo => $valor)
                            <p><strong>{{ ucfirst($campo) }}:</strong> {{ $valor }}</p>
                        @endforeach
                    </div>
                @endforeach
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

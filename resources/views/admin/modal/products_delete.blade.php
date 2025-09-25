<!-- Modal -->
<div class="modal fade" id="hapusproducts{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data ini? <br>
        Produk : <strong>{{ $data->nama_produk }}</strong>
      </div>
      <div class="modal-footer">
         <form action="/hapus_products/{{ $data->id }}" method="post">
            @csrf
            @method('delete')
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Iya</button>
     </form>
      </div>
    </div>
  </div>
</div>

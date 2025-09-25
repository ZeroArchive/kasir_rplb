<!-- Modal -->
<div class="modal fade" id="editproducts{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="/edit_products/{{ $data->id }}" method="post">
            @csrf
            @method('PUT')
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb3">
            <label for="nama_produk">Nama Barang</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{$data->nama_produk}}">
        </div>
        <div class="mb3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" id="stok" value="{{$data->stok}}">
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Kategori</label>
        <select name="kategori_id" id="kategori_id" class="form form-control" required>
            <option value="" selected disabled>Pilih kategori.......</option>
            @foreach($kategori as $list)
                <option value="{{ $list->id }}">{{ $list->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
        <div class="mb3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{$data->harga}}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

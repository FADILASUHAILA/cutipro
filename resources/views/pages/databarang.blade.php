<div class="col">
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $number = 1;
                @endphp
                @foreach ($databarangs as $databarang)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $databarang->kode_barang }}</td>
                    <td>{{ $databarang->nama_barang }}</td>
                    <td>{{ $databarang->jenis->nama }}</td>
                    <td>{{ $databarang->jumlah ?? 0 }}</td>
                    <td>{{ $databarang->satuan->nama_satuan }}</td>
                    <td>{{ $databarang->supplier->nama }}</td>
                    <td>

                        @include('component.databarang.modalhapus')
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus{{ $databarang->id }}">Hapus</a>
                    </td>
                </tr>
                @php
                $number++;
                @endphp
                @endforeach

                @if (count($databarangs) === 0)
                <tr>
                    <td colspan="5">Data Barang kosong</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Button trigger modal -->
    <button id="btnModal" type="button" class="btn btn-primary">Tambah Data Barang</button>

    <!-- Modal -->
    @include('component.databarang.templateModal')
    <!-- Modal -->

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnModal').click(function() {
                // Menggunakan AJAX untuk memuat konten modal
                $.ajax({
                    url: "{{ route('databarang.create') }}",
                    method: "GET",
                    dataType: "html",
                    success: function(response) {
                        $('#modalContent').html(response);

                        // Menampilkan modal setelah konten dimuat
                        var modal = new bootstrap.Modal(document.getElementById('modalAddDataBarang'));
                        modal.show();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

</div>
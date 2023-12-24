@extends('frontend.template.form_app')
@section('content')
<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
            <h3>Form Pendaftaran Booking Online Pendakian Penanggungan</h3>

        </div>

    </div>

</section>
<div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Pendaftaran Pendakian</h2>
      <form action="{{ route('daftar') }}" method="post">
        @csrf
                <!-- Data Pendaftaran -->
            <div class="form-group">
                <label for="namaLengkap">Nama Lengkap:</label>
                <input type="text" class="form-control" name="nama_lengkap" id="namaLengkap" placeholder="Masukkan Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
             </div>
             <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="number" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Enter your telephone number">
             </div>
             <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                   <option value="laki-laki">Laki-laki</option>
                   <option value="perempuan">Perempuan</option>
                </select>
             </div>
        <!-- Tombol Tambah Anggota -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambahAnggota">
          Tambah Anggota
        </button>

        <!-- Tabel Anggota -->
        <h5 class="mt-4">Daftar Anggota</h5>
        <table class="table">
          <thead>
            <tr>
              <th>Nama Anggota</th>
              <th>Umur Anggota</th>
              <th>Alamat Anggota</th>
            </tr>
          </thead>
          <tbody id="tabelAnggotaBody">
            <!-- Isi tabel akan ditambahkan melalui JavaScript -->
          </tbody>
        </table>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>

      <!-- Modal Tambah Anggota -->
      <div class="modal" id="modalTambahAnggota">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambah Anggota</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="form-group">
                <label for="namaAnggota">Nama Anggota:</label>
                <input type="text" class="form-control" id="namaAnggota" name="anggota[][nama]" placeholder="Masukkan Nama Anggota" required>
            </div>
            <div class="form-group">
                <label for="umurAnggota">Umur Anggota:</label>
                <input type="number" class="form-control" id="umurAnggota" name="anggota[][umur]" placeholder="Masukkan Umur Anggota" required>
            </div>
            <div class="form-group">
                <label for="alamatAnggota">Alamat Anggota:</label>
                <textarea class="form-control" id="alamatAnggota" name="anggota[][alamat]" placeholder="Masukkan Alamat Anggota" required></textarea>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-success" onclick="tambahAnggota()">Simpan</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  @endsection

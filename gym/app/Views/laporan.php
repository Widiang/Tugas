<div class="pc-container">
      <div class="pc-content">
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">



<br>

<section class="section">
  <div class="row">
  <div class="col-lg-3"> <!-- Kolom pertama, setengah lebar -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Print PDF</h5>
            <!-- Form PDF -->
            <form action="<?= base_url('home/aksi_laporan_pdf') ?>" method="get" enctype="multipart/form-data">
                <!-- Input Tanggal Mulai -->
                <div class="row mb-3">
                    <label for="mulai" class="col-sm-4 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="mulai" name="mulai">
                    </div>
                </div>
                <!-- Input Tanggal Selesai -->
                <div class="row mb-3">
                    <label for="selesai" class="col-sm-4 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="selesai" name="selesai">
                    </div>
                </div>
                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">PDF</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>

<section class="section">
  <div class="row">
  <div class="col-lg-3"> <!-- Kolom pertama, setengah lebar -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Print Excel</h5>
            <!-- Form PDF -->
            <form action="<?= base_url('home/aksi_laporan_excel') ?>" method="POST" enctype="multipart/form-data">
                <!-- Input Tanggal Mulai -->
                <div class="row mb-3">
                    <label for="mulai" class="col-sm-4 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="mulai2" name="mulai2">
                    </div>
                </div>
                <!-- Input Tanggal Selesai -->
                <div class="row mb-3">
                    <label for="selesai" class="col-sm-4 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="selesai2" name="selesai2">
                    </div>
                </div>
                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">Excel</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>

<section class="section">
  <div class="row">
  <div class="col-lg-3"> <!-- Kolom pertama, setengah lebar -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Print Windows</h5>
            <!-- Form PDF -->
            <form action="<?= base_url('home/windows_print') ?>" method="POST" enctype="multipart/form-data">
                <!-- Input Tanggal Mulai -->
                <div class="row mb-3">
                    <label for="mulai" class="col-sm-4 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="mulai3" name="mulai3">
                    </div>
                </div>
                <!-- Input Tanggal Selesai -->
                <div class="row mb-3">
                    <label for="selesai" class="col-sm-4 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="selesai3" name="selesai3">
                    </div>
                </div>
                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="btn btn-secondary">Window</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>


              </div>
            </div> 
          </div>
          </div>
    </div>
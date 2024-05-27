<div class="pc-container">
      <div class="pc-content">
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
              

                <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_pesan')?>"method="POST">
              <h5 class="my-4 d-flex">Pemesanan</h5>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="NamaMember" placeholder="Nama" >
                <label for="floatingInput">Nama</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="NoTelp" placeholder="Nomor" >
                <label for="floatingInput1">Nomor Telepon</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="AlamatMember" placeholder="Alamat" >
                <label for="floatingInput1">Alamat</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" readonly class="form-control" id="floatingInput" name="LamaPaket" placeholder="LamaPaket" value="<?=$satu->LamaPaket?>">
              </div>
              <input type="hidden" name="PaketID" value="<?= esc($satu->PaketID) ?>">
                <button type="submit" class="btn btn-secondary">Pesan</button>
              
             
            </div>
            </form>



                </div>
              </div>
            </div> 
          </div>
          </div>
    </div>
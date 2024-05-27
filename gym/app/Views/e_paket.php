<div class="pc-container">
      <div class="pc-content">
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
              

                <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_e_paket')?>"method="POST">
              <h5 class="my-4 d-flex">Paket</h5>
              <h5 class="my-4 d-flex">Buat Paket</h5>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="NamaPaket" placeholder="Nama" value="<?=$satu->NamaPaket?>">
                <label for="floatingInput">Nama Paket</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="LamaPaket" placeholder="LamaPaket" value="<?=$satu->LamaPaket?>">
                <label for="floatingInput1">Lama Paket</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="Harga" placeholder="Harga" value="<?=$satu->Harga?>">
                <label for="floatingInput1">Harga</label>
              </div>
             
              <input type="hidden" name="id" value="<?= $satu->PaketID ?>">
                <button type="submit" class="btn btn-secondary">Pesan</button>
              
             
            </div>
            </form>



                </div>
              </div>
            </div> 
          </div>
          </div>
    </div>
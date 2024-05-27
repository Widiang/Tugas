<div class="pc-container">
      <div class="pc-content">
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
              

                <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_paket')?>"method="POST">
              <h5 class="my-4 d-flex">Buat Paket</h5>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="NamaPaket" placeholder="Nama" >
                <label for="floatingInput">Nama Paket</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="LamaPaket" placeholder="NamaPaket" >
                <label for="floatingInput1">Lama Paket</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput1" name="Harga" placeholder="Harga" >
                <label for="floatingInput1">Harga</label>
              </div>
             
      
                <button type="submit" class="btn btn-secondary">Buat</button>
              
             
            </div>
            </form>



                </div>
              </div>
            </div> 
          </div>
          </div>
    </div>
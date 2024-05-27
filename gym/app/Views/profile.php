<div class="pc-container">
      <div class="pc-content">
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
              

                <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_e_profile')?>"method="POST">
              <h5 class="my-4 d-flex">Profile</h5>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="Username" placeholder="Nama" value="<?=$satu->Username?>">
                <label for="floatingInput">Nama</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" readonly class="form-control" id="floatingInput1" name="Level" placeholder="Level"value="<?=$satu->Level?>" >
                <label for="floatingInput1">Level</label>
              </div>
             
             
      
                <button type="submit" class="btn btn-secondary">Edit</button>
              
             
            </div>
            </form>



                </div>
              </div>
            </div> 
          </div>
          </div>
    </div>
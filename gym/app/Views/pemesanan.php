<div class="pc-container">
      <div class="pc-content">
      <?php
      if (session()->get('level') == 2){
      ?>
      <a href=" <?= base_url('home/paket/')?>">
		<button class="btn btn-dark">
			Buat Paket
		</button>
	</a>
  <?php
      } else {

      }
      ?>
  <div><br></div>
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                
                <div class="row mb-3 align-items-center">
                
               <table>
               <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Lama Paket</th>
                    <th scope="col">Harga</th>
					<th scope="col">Aksi</th>                         
                  </tr>
                </thead>
                <tbody>
                <?php
			
			$no=1;
			foreach($gym as $abcd){
			?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $abcd->NamaPaket?></td>
                        <td><?= $abcd->LamaPaket?></td>
                        <td><?= $abcd->Harga?>K</td>
                        <td>
			<a href="<?= base_url('home/pesan/' .$abcd->PaketID) ?>">
      <button class="btn btn-info">
       Pesan
      </button>
				</a>
			</td>	
      <?php
      if (session()->get('level') == 2){
      ?>
      <td>
			<a href="<?= base_url('home/e_paket/' .$abcd->PaketID) ?>">
      <button class="btn btn-info">
       Edit
      </button>
				</a>
			</td>	
      <td>
			<a href="<?= base_url('home/hps_paket/' .$abcd->PaketID) ?>">
      <button class="btn btn-info">
       Hapus
      </button>
				</a>
			</td>	
      <?php
      } else {

      }
      ?>
                    </tr>
                    <?php } ?>
                </tbody>
               </table>

                </div>
              </div>
            </div> 
          </div>
          </div>
    </div>
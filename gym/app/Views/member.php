<div class="pc-container">
      <div class="pc-content">
<div class="col-xl-12 col-md-12">
           <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
                
               <table>
               <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesanan</th>
                    <th scope="col">Nama Member</th>
                    <th scope="col">No Telepon</th>
					<th scope="col">Alamat</th>
                    <th scope="col">Nama Paket</th> 
                    <th scope="col">Harga</th> 
                    <th scope="col">Tanggal Mulai</th> 
                    <th scope="col">Tanggal Selesai</th>
                  </tr>
                </thead>
                <tbody>
                <?php
			
			$no=1;
			foreach($gym as $abcd){
			?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $abcd->Username?></td>
                        <td><?= $abcd->NamaMember?></td>
                        <td><?= $abcd->NoTelp?></td>
                        <td><?= $abcd->AlamatMember?></td>
                        <td><?= $abcd->NamaPaket?></td>
                        <td><?= $abcd->Harga?>K</td>
                        <td><?= $abcd->TglMulai?></td>
                        <td><?= $abcd->TglSelesai?></td>
                        <?php
      if (session()->get('level') == 2){
      ?>
                        <td>
			<a href="<?= base_url('home/hps_member/' .$abcd->MemberID) ?>">
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
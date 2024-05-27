<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid;
            
        }
    </style>
</head>
<body>
    
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
                     
            <?php 
      } else {

      }
      ?>

                    </tr>
                    <?php } ?>
                </tbody>
               </table>
</body>
</html>
                
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
                     
            <?php 
      } else {

      }
      ?>

                    </tr>
                    <?php } ?>
                </tbody>
               </table>

              
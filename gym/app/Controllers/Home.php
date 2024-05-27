<?php

namespace App\Controllers;
use App\Models\M_GYM;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Home extends BaseController
{
	public function dashboard(){
        if(session()->get('id')>0){
        $model = new M_GYM();
       
        echo view('header');
        echo view('menu');
		echo view('dashboard');
        echo view('footer');

        
    } else {
        return redirect()->to('home/login');
    }
    }
	public function login()

	{
		echo view ('header');
		echo view('login');
		
	}
	public function aksi_login()

	{
		$name = $this->request->getPost('Username');
		$pw = $this->request->getPost('Password');

		$where = array(

			'Username'=>$name,
			'Password'=>$pw,
		);
		
		$model = new M_GYM();
		$check = $model -> getWhere('user',$where);
		
			if ($check>0) {
				session()->set('nama',$check->Username);
				session()->set('id',$check->UserID);
				session()->set('level',$check->Level);
			return redirect()->to('home/dashboard');
		}else{
			return redirect()->to('home/login');
		

		}
	}
		public function logout()

	{
		session()->destroy();
		return redirect()->to('home/login');
	}
	public function pemesanan(){
        if(session()->get('id')>0){
        $model = new M_GYM();
		$data['gym']=$model->tampil('paket');
       
        echo view('header');
        echo view('menu');
		echo view('pemesanan', $data);
        echo view('footer');

        
    } else {
        return redirect()->to('home/login');
    }
    }
	public function pesan($id){
        if(session()->get('id')>0){
        $model = new M_GYM();
		$where=array('PaketID'=>$id);
        $data['satu']=$model->getWhere('paket',$where);
       
        echo view('header');
        echo view('menu');
		echo view('pesan', $data);
        echo view('footer');

        
    } else {
        return redirect()->to('home/login');
    }	
    }
	public function aksi_pesan(){
		$model = new M_GYM();
		$a = $this->request->getPost('NamaMember');
		$b = $this->request->getPost('NoTelp');
		$c = $this->request->getPost('AlamatMember');
		$d = $this->request->getPost('LamaPaket');
		$paketID = $this->request->getPost('PaketID');
		$UserID = session()->get('id');
	
		// Menggunakan format tanggal yang benar
		$tglMulai = date('Y-m-d');
		$date = new \DateTime($tglMulai);
	
		// Menambahkan durasi ke tanggal mulai berdasarkan paket yang dipilih
		switch ($d) {
			case '3 Bulan':
				$date->modify('+3 months');
				break;
			case '1 Tahun':
				$date->modify('+1 year');
				break;
			case '2 Tahun':
				$date->modify('+2 years');
				break;
			default:
				// Menangani kasus jika nilai $d tidak sesuai
				throw new \Exception('Paket tidak valid');
		}
	
		$tglSelesai = $date->format('Y-m-d');
	
		// Menyiapkan data untuk disimpan
		$isi = array(
			'NamaMember' => $a,
			'NoTelp' => $b,
			'AlamatMember' => $c,
			'PaketID' => $paketID, // Menyimpan PaketID dari data POST
			'UserID' => $UserID,
			'TglMulai' => $tglMulai,
			'TglSelesai' => $tglSelesai,
		);
		
		$model->tambah('member', $isi);
		return redirect()->to('home/member');
	}
	public function member(){
        if(session()->get('id')>0){
        $model = new M_GYM();
		$data['gym']=$model->join4tbl('member','paket','user','member.PaketID=paket.PaketID','member.UserID=user.UserID');
       
        echo view('header');
        echo view('menu');
		echo view('member', $data);
        echo view('footer');

        
    } else {
        return redirect()->to('home/login');
    }
    }
	public function hps_member($id){
		$model = new M_GYM();
		$where=array('MemberID'=>$id);
		$model->hapus('member', $where);

		return redirect()->to('Home/member');	
	}
	public function laporan()
	{
        if(session()->get('id')>0){
	
        echo view('header');
        echo view('menu');
		echo view('laporan');
        echo view('footer');
    } else {
        return redirect()->to('home/login');
    }
	}
	public function aksi_laporan_pdf(){
		$model = new M_GYM();
		$mulai = $this->request->getGetpost('mulai');
		$selesai = $this->request->getGetPost('selesai');
	
		// Memanggil model untuk mendapatkan data sesuai dengan ID pengguna
		$data['gym']=$model->cari('member','paket','user','member.PaketID=paket.PaketID','member.UserID=user.UserID', $mulai, $selesai); // Menggunakan model cari2()
	
		// Load library Dompdf
		$dompdf = new \Dompdf\Dompdf();
	
		// Render view 'print' menjadi HTML
		$html = view('print', $data);
	
		// Load HTML ke Dompdf
		$dompdf->loadHtml($html);
	
		// Setting ukuran dan orientasi kertas
		$dompdf->setPaper('A4', 'portrait');
	
		// Render PDF (Halaman)
		$dompdf->render();
	
		// Output file PDF (Download atau Tampil di browser)
		$dompdf->stream("Laporan Member.pdf", array("Attachment" => false));
	}
	
	public function aksi_laporan_excel() {
		// Memuat model yang sesuai
		$model = new M_GYM();
	
		// Tangkap tanggal mulai dan tanggal selesai dari form
		 
		$mulai = $this->request->getPost('mulai2');
		$selesai = $this->request->getPost('selesai2');
		
		// Memanggil model untuk mendapatkan data sesuai dengan ID pengguna
		$data=$model->cari('member','paket','user','member.PaketID=paket.PaketID','member.UserID=user.UserID', $mulai, $selesai);
	
		// Tampilkan isi dari $data
		
	
		// Membuat objek Spreadsheet
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		
		// Judul laporan
		$sheet->setCellValue('A1', 'Laporan Siswa Prakerind');
		
		// Merge cell untuk judul laporan
		$sheet->mergeCells('A1:H1');
	
		// Set style untuk judul laporan
		$sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
	
		// Set style untuk cell judul laporan
		$sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
			
		// Set header untuk kolom
		$sheet->setCellValue('A2', 'NAMA PEMESANAN');
		$sheet->setCellValue('B2', 'NAMA MEMBER');
		$sheet->setCellValue('C2', 'NO TELEPON');
		$sheet->setCellValue('D2', 'ALAMAT MEMBER');
		$sheet->setCellValue('E2', 'NAMA PAKET');
		$sheet->setCellValue('F2', 'HARGA');
		$sheet->setCellValue('G2', 'Tanggal Mulai');
		$sheet->setCellValue('H2', 'Tanggal Selesai');
		
		// Mengatur lebar kolom
		$sheet->getColumnDimension('A')->setWidth(15);
		$sheet->getColumnDimension('B')->setWidth(15);
		$sheet->getColumnDimension('C')->setWidth(30);
		$sheet->getColumnDimension('D')->setWidth(20);
		$sheet->getColumnDimension('E')->setWidth(20);
		$sheet->getColumnDimension('F')->setWidth(15);
		$sheet->getColumnDimension('G')->setWidth(15);
		$sheet->getColumnDimension('H')->setWidth(15);
		
		// Membuat judul tebal
		$sheet->getStyle('A2:H2')->getFont()->setBold(true);
		
		// Mengisi data ke dalam sheet
		$rowIndex = 3; // Mulai dari baris 3 setelah judul dan header
		foreach ($data as $row) {
			$sheet->setCellValue('A' . $rowIndex, $row->Username);
			$sheet->setCellValue('B' . $rowIndex, $row->NamaMember);
			$sheet->setCellValue('C' . $rowIndex, $row->NoTelp);
			$sheet->setCellValue('D' . $rowIndex, $row->AlamatMember);
			$sheet->setCellValue('E' . $rowIndex, $row->NamaPaket);
			$sheet->setCellValue('F' . $rowIndex, $row->Harga);
			$sheet->setCellValue('G' . $rowIndex, $row->TglMulai);
			$sheet->setCellValue('H' . $rowIndex, $row->TglSelesai);
			
			$rowIndex++;
		}
	
		// Menambahkan border
		$lastColumn = $sheet->getHighestColumn();
		$lastRow = $sheet->getHighestRow();
		$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
		$sheet->getStyle('A2:' . $lastColumn . $lastRow)->applyFromArray($styleArray);
		
		// Setelah mengisi data, simpan spreadsheet ke dalam file atau kirim ke browser
		$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
		$filename = 'laporan member.xlsx';
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}
	public function windows_print(){
		$model = new M_GYM();
		
		$mulai = $this->request->getPost('mulai3');
		$selesai = $this->request->getPost('selesai3');
	
		// Memanggil model untuk mendapatkan data sesuai dengan ID pengguna
		$data['gym']=$model->cari('member','paket','user','member.PaketID=paket.PaketID','member.UserID=user.UserID', $mulai, $selesai);
   
	
	   echo view('print_windows', $data);
	  
	   }

	   public function paket(){
        if(session()->get('id')>0){
        $model = new M_GYM();
		
       
       
        echo view('header');
        echo view('menu');
		echo view('paket');
        echo view('footer');

        
    } else {
        return redirect()->to('home/login');
    }	
    }
	public function aksi_paket(){
		$model = new M_GYM();
		$a = $this->request->getPost('NamaPaket');
		$b = $this->request->getPost('LamaPaket');
		$c = $this->request->getPost('Harga');
		
		$UserID = session()->get('id');
	
		
	
		// Menyiapkan data untuk disimpan
		$isi = array(
			'NamaPaket' => $a,
			'LamaPaket' => $b,
			'Harga' => $c,
			
			'UserID' => $UserID,
			
		);
		
		$model->tambah('paket', $isi);
		return redirect()->to('home/pemesanan');
	}
	public function hps_paket($id){
		$model = new M_GYM();
		$where=array('PaketID'=>$id);
		$model->hapus('paket', $where);

		return redirect()->to('Home/pemesanan');	
	}
	public function e_paket($id){
        if(session()->get('id')>0){
        $model = new M_GYM();
		$where=array('PaketID'=>$id);
        $data['satu']=$model->getWhere('paket',$where);
       
        echo view('header');
        echo view('menu');
		echo view('e_paket', $data);
        echo view('footer');

        
    } else {
        return redirect()->to('home/login');
    }	
    }
	public function aksi_e_paket(){
		$model = new M_GYM();
		$a = $this->request->getPost('NamaPaket');
		$b = $this->request->getPost('LamaPaket');
		$c = $this->request->getPost('Harga');
		$id= $this->request->getPost('id');
		$UserID = session()->get('id');
	
		$where=array('PaketID'=>$id);
	
		// Menyiapkan data untuk disimpan
		$isi = array(
			'NamaPaket' => $a,
			'LamaPaket' => $b,
			'Harga' => $c,
			
			'UserID' => $UserID,
			
		);
		
		$model->edit('paket', $isi, $where);
		return redirect()->to('home/pemesanan');
	}
	public function profile()
{
    // Periksa apakah pengguna telah login dan memiliki tingkat akses yang sesuai
    if (session()->get('level') > 0) {
        // Periksa apakah pengguna memiliki tingkat akses siswa

            // Inisialisasi model M_PKL
            $model = new M_GYM();

            // Ambil data siswa berdasarkan ID pengguna yang sedang login
            $where = ['UserID' => session()->get('id')];
            $data['satu'] = $model->getWhere('User', $where);

    
          
            // Tampilkan view dengan data yang telah diperoleh
            echo view('header');
            echo view('menu');
            echo view('profile', $data); 
            echo view('footer');
    } else {
        // Redirect pengguna ke halaman login jika belum login
        return redirect()->to('home/login');
    }
}
public function aksi_e_profile(){
	$model = new M_GYM();
	$a = $this->request->getPost('Username');
	
	$where = ['UserID' => session()->get('id')];



	// Menyiapkan data untuk disimpan
	$isi = array(
		'Username' => $a,
		
		
	);
	
	$model->edit('user', $isi, $where);
	return redirect()->to('home/profile');
}
public function akun()

	{
		echo view ('header');
		echo view('akun');
		
	}
	public function buat_akun()

	{
		$name = $this->request->getPost('Username');
		$pw = $this->request->getPost('Password');

		$where = array(

			'Username'=>$name,
			'Password'=>$pw,
		);
		
		$model = new M_GYM();
		
		$isi = array(
			'Username' => $name,
			'Password' => $pw,
			'Level' => 1
			
			
		);
		
		$model->tambah('user', $isi);
		return redirect()->to('home/login');
		
		
	}
}

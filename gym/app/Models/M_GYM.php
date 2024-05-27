<?php
namespace App\Models;
use CodeIgniter\Model;

class M_GYM extends Model
{
    public function getWhere($tabel,$where){
        return $this->db->table($tabel)
                        ->getwhere($where)
                        ->getRow();
    }
    public function tampil($tabel){
        return $this->db->table($tabel)   
                         ->get()
                         ->getResult(); 
     }
     public function tambah($table,$isi){
        return $this->db->table($table)
                    ->insert($isi);
     }
     public function join4tbl($tabel1, $tabel2, $tabel3, $on1, $on2){
        return $this->db->table($tabel1)
                       ->join($tabel2, $on1, 'inner')
                       ->join($tabel3, $on2, 'inner')
                       ->get()
                       ->getResult();     
     
       }
       public function hapus($table,$where){
        return $this->db->table($table)
                        ->delete($where);
    }
    public function cari($tabel1, $tabel2, $tabel3, $on1, $on2, $tglMulai, $tglSelesai){
        return $this->db->table($tabel1)
                       ->join($tabel2, $on1, 'inner')
                       ->join($tabel3, $on2, 'inner')
                       ->where('TglMulai', $tglMulai)
                       ->where('TglSelesai', $tglSelesai)
                       ->get()
                       ->getResult();     
    }
    public function edit($tabel,$isi,$where){
        return $this->db->table($tabel)
                        ->update($isi,$where);
    }
    }

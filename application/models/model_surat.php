<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_surat extends CI_Model {
	public function getdata($kode = null)
	{
		$this->db->select('*');
		$this->db->join('tb_jenis','tb_jenis.id = tb_surat.id_jenis');
		$this->db->join('tb_kategori','tb_kategori.id = tb_surat.id_keterangan');
		if($kode != null){
			$this->db->where('id_surat',$kode);
		}
		$hasil = $this->db->get('tb_surat');
		return $hasil;
	}
	public function getDataById($id)
	{
		$this->db->join('tb_jenis','tb_jenis.id = tb_surat.id_jenis');
		$this->db->join('tb_kategori','tb_kategori.id = tb_surat.id_keterangan');
		$this->db->where('id_keterangan',$id);
		return $this->db->get('tb_surat');
	}
	public function getJenis()
	{
		$this->db->select('*');
		$this->db->from('tb_jenis');
		$jenis = $this->db->get();
		return $jenis;
	}
	public function add($data)
	{
		$parameter = array(
			'id_surat' => null,
			'no_surat' => $data['no_surat'],
			'hal' => $data['hal'],
			'lampiran' => $data['lampiran'],
			'tujuan' => $data['tujuan'],
			'id_jenis' => $data['jenis'],
			'id_keterangan' => $data['id_ket'],
			'tanggal' => $data['tgl'],
		);
		$query = $this->db->insert('tb_surat',$parameter);
		if ($query) {
			echo "true";
		}else{
			echo "false";
		}
	}
	public function edit($data)
	{
		$parameter = array(
			'no_surat' => $data['no_surat'],
			'hal' => $data['hal'],
			'lampiran' => $data['lampiran'],
			'tujuan' => $data['tujuan'],
			'id_jenis' => $data['jenis'],
			'id_keterangan' =>$data['id_ket'],
			'tanggal' => $data['tgl'],
		);
		$this->db->set($parameter);
		$this->db->where('id_surat',$data['id']);
		$query = $this->db->update('tb_surat',$parameter);
		if ($query) {
			echo "true";
		}else{
			echo "false";
		}
	}
	public function getHapus($id)
	{
		$this->db->where('id_surat',$id);
		$query = $this->db->delete('tb_surat');
		redirect('surat');
	}
	public function getPeriode($awal,$akhir,$key)
	{
		$this->db->select('*');
		$this->db->join('tb_jenis','tb_jenis.id = tb_surat.id_jenis');
		$this->db->join('tb_kategori','tb_kategori.id = tb_surat.id_keterangan');
		$this->db->where('tanggal >=', $awal);
		$this->db->where('tanggal <=', $akhir);
		$this->db->where('id_keterangan',$key);
		$hasil = $this->db->get('tb_surat');
		return $hasil;
	}
}

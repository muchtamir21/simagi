<?php
// Penduduk.php
class m_dashboard extends CI_Model {
	public function __construct()
	{
		$this->load->database('db_simagi');
	}
 
	public function graph()
	{
		$data = $this->db->get('pengguna');
		return $data->result();
	}

	public function getnamabagian(){

		$query ="SELECT `pengguna`.*, `bagian`.`namabagian`
					FROM `pengguna` JOIN `bagian`
					ON `pengguna`.`namabagian` = `bagian`.`id` ";
	
					return $this->db->query($query)->result_array();
			
		}
		
		
		function detail_join_pembelian_barang($id){
			$this->db->select('*');
			$this->db->from('pembelian_barang');
			$this->db->join('barang','pembelian_barang.kode_barang=barang.kode_barang','left');
			$this->db->join('kategori_barang','barang.kd_kategori_barang=kategori_barang.id_kategori','left');
			$this->db->join('jenis_barang','barang.kd_jenis_barang=jenis_barang.id_jenis_barang','left');
			$this->db->join('satuan_barang','barang.satuan_barang=satuan_barang.id_satuan','left');
			$this->db->where('kd_pembelian',$id);
			$query = $this->db->get();
			return $query;
		}

		public function join_bagian()
		{
			$this->db->select('*');
			$this->db->from('bagian');
			$this->db->join('level','bagian.level = level.idlevel');
			$query = $this->db->get();
			return $query;
		}

			public function notif_catatan($id)
		{
			$this->db->select('*');
			$this->db->from('catatan');
			$this->db->join('pengguna','pengguna.idpengguna = catatan.id_user');
			$this->db->where('id_user !=',$id);
			$this->db->order_by('idcatatan','DESC');
			$this->db->limit('5');
			$query = $this->db->get();
			return $query;
		}
public function notifikasi($id)
		{
			$this->db->select('*');
			$this->db->from('catatan');
			$this->db->join('pengguna','pengguna.idpengguna = catatan.id_user');
			$this->db->where('id_user !=',$id);
			$this->db->where('notif ','0');
			$this->db->order_by('idcatatan','DESC');
			$this->db->limit('5');
			$query = $this->db->get();
			return $query;
		}

		public function join_datapengguna()
		{
			$this->db->select('*');
			$this->db->from('pengguna');
			$this->db->join('bagian','pengguna.namabagian = bagian.id');
			$query = $this->db->get();
			return $query;
		}

		public function usulan_ppk()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('progres_usulan','usulankegiatan.idusulan = progres_usulan.idusulan');
			$this->db->where('validasi_ppk !=','0');
			$this->db->order_by('usulankegiatan.idusulan','DESC');
			$query = $this->db->get();
			return $query;
		}
		
		public function usulan_bendahara()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('progres_usulan','usulankegiatan.idusulan = progres_usulan.idusulan');
			$this->db->where('validasi_bendahara !=','0');
			$this->db->order_by('usulankegiatan.idusulan','DESC');
			$query = $this->db->get();
			return $query;
		}

			public function usulan_bendahara_setujui()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('progres_usulan','usulankegiatan.idusulan = progres_usulan.idusulan');
			$this->db->where('upload_umk !=','');	
			$query = $this->db->get();
			return $query;
		}
			public function usulan_bendahara_tolak()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('progres_usulan','usulankegiatan.idusulan = progres_usulan.idusulan');
			$this->db->where('status_kegiatan ','2');	
			$query = $this->db->get();
			return $query;
		}
	public function usulan_bendahara_proses()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('progres_usulan','usulankegiatan.idusulan = progres_usulan.idusulan');
			$this->db->where('status_kegiatan ','0');
			$this->db->where('upload_umk','');
			$query = $this->db->get();
			return $query;
		}

		public function usulan_dirut()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('progres_usulan','usulankegiatan.idusulan = progres_usulan.idusulan');
			$this->db->where('validasi_dirut !=','0');
			$this->db->order_by('usulankegiatan.idusulan','DESC');
			$query = $this->db->get();
			return $query;
		}
		
		public function data_terakhir_usulan()
		{
			$this->db->select('idusulan');
			$this->db->from('usulankegiatan');
			$this->db->order_by('idusulan','desc');
			$query = $this->db->get();
			return $query;
		}
		public function cek_proposal($idusulan)
		{
			$this->db->select('*');
			$this->db->from('upload_file');
			$this->db->where('idusulan',$idusulan);
			$this->db->where('jenis_upload','Proposal');
			$this->db->order_by('id_upload','desc');
			$query = $this->db->get();
			return $query;
		}

		public function cek_rab($idusulan)
		{
			$this->db->select('*');
			$this->db->from('upload_file');
			$this->db->where('idusulan',$idusulan);
			$this->db->where('jenis_upload','RAB');
			$this->db->order_by('id_upload','desc');
			$query = $this->db->get();
			return $query;
		}
		public function cek_surat($id)
		{
			$this->db->select('*');
			$this->db->from('upload_file');
			$this->db->where('idusulan',$id);
			$this->db->where('jenis_upload','Surat Kegiatan');
			$this->db->order_by('id_upload','desc');
			$query = $this->db->get();
			return $query;
		}

		public function jml_pengguna()
		{
			$this->db->select('count(level) as total');
			$this->db->from('pengguna');
			$query = $this->db->get();
			return $query;
		}

		public function jml_usulan()
		{
			$this->db->select('count(idusulan) as total');
			$this->db->from('usulankegiatan');
			$query = $this->db->get();
			return $query;
		}

		public function jml_rkakl()
		{
			$this->db->select('count(idrkakl) as total');
			$this->db->from('inputrkakl');
			$query = $this->db->get();
			return $query;
		}

		public function jml_umk()
		{
			$this->db->select('count(idumk) as total');
			$this->db->from('umk');
			$query = $this->db->get();
			return $query;
		}
		
		
		public function usulan_baru()
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->order_by('idusulan','DESC');
			$this->db->limit('5');
			$query = $this->db->get();
			return $query;
		}
			public function laporan_usulan($tanggal,$bagian)
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('pengguna','pengguna.idpengguna = usulankegiatan.id_user');
			$this->db->like('tanggal_input',$tanggal);
			$this->db->like('namabagian',$bagian);
			$query = $this->db->get();
			return $query;
		}

		
		public function laporan_usulan_setujui($tanggal,$bagian)
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('pengguna','pengguna.idpengguna = usulankegiatan.id_user');
			$this->db->like('tanggal_input',$tanggal);
			$this->db->like('namabagian',$bagian);
			$this->db->where('upload_umk !=','');	
			$query = $this->db->get();
			return $query;
		}
		
			public function laporan_usulan_tolak($tanggal,$bagian)
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('pengguna','pengguna.idpengguna = usulankegiatan.id_user');
			$this->db->like('tanggal_input',$tanggal);
			$this->db->like('namabagian',$bagian);
			$this->db->where('status_kegiatan ','2');	
			$query = $this->db->get();
			return $query;
		}
	public function laporan_usulan_proses($tanggal,$bagian)
		{
			$this->db->select('*');
			$this->db->from('usulankegiatan');
			$this->db->join('pengguna','pengguna.idpengguna = usulankegiatan.id_user');
			$this->db->like('tanggal_input',$tanggal);
			$this->db->like('namabagian',$bagian);
			$this->db->where('status_kegiatan ','0');
			$this->db->where('upload_umk','');
			$query = $this->db->get();
			return $query;
		}

				public function tolak_catatan($id)
		{
			$this->db->select('*');
			$this->db->from('catatan');
			$this->db->where('idusulan',$id);
			$this->db->order_by('idcatatan','DESC');
			$query = $this->db->get();
			return $query;
		}
		
		
		

		function semua($table){
			return $this->db->get($table);
		}
	
		function where($table,$where){
			return $this->db->get_where($table,$where);
		}

		function input_data($data,$table){
			$this->db->insert($table,$data);
		}
		function hapus_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	
 
}
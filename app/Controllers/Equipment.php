<?php

namespace App\Controllers;

use App\Models\EquipmentModel;

class Equipment extends BaseController
{
    protected $equipmentModel;
    public function __construct()
    {
        $this->equipmentModel = new EquipmentModel();
    }

    public function index()
    {
        // $equipment = $this->equipmentModel->findAll();

        // d($this->request->getVar('keyword'));
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $equipment = $this->equipmentModel->search($keyword);
        } else {
            $equipment = $this->equipmentModel;
        }

        $currentPage = $this->request->getVar('equipment_page') ? $this->request->getVar('equipment_page') : 1;

        $data = [
            'title'       => 'Daftar Equipment',
            'equipment'   => $this->equipmentModel->getEquipment(),
            'equipment'   => $this->equipmentModel->paginate(5,'equipment'),
            'pager'       => $this->equipmentModel->pager,
            'currentPage' => $currentPage
        ];

        //cara connect db tanpa model
        // $db = \Config\Database::connect();
        // $equipment = $db->query("SELECT * FROM equipment");
        // dd($equipment);


        // Chek Model Connection
        // $equipmentModel = new EquipmentModel();
        // $equipment = $equipmentModel->findAll();
        // dd($equipment); 

        return view('admin/equipment/equipment', $data);
    }

    public function detail($slug)
    {
        
        $data = [

            'title' => 'Detail Equipment',
            'equipment' => $this->equipmentModel->getEquipment($slug)
        ];

        // Jika equipment tidak ada pada table
        if(empty($data['equipment'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama alat ' . $slug . ' tidak ditemukan');
        }

        return view('admin/equipment/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            
            'title' => 'Form Tambah Alat',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/equipment/create', $data);
    }

    public function save()
    {
        
        if(!$this->validate([
            'nama_alat' => 'required',
            'brand' => 'required',
            'capacity' => 'required',
            // 'sampul' => [
            //     'rules' => 'uploaded[sampul]|max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,
            //     img/jpeg,img/png]',
            //     'errors' => [
            //         'uploaded' => 'Pilih gambar sampul terlebih dahulu',
            //         'max_size' => 'Ukuran gambar terlalu besar',
            //         'is_image' => 'Yang anda pilih bukan gambar',
            //         'mime_in' => 'Yang anda pilih bukan gambar',
            //     ]
            // ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/equipment/create')->withInput()->with('validation', $validation);
        }

        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        // dd($fileSampul);

        // generate nama sampul random
        $namaSampul = $fileSampul->getRandomName();

        // movement folder img
        $fileSampul->move('img', $namaSampul);


        // dd($this->request->getVar());
        $slug = url_title($this->request->getVar('nama_alat'),'-',true);
        $this->equipmentModel->save([
            'nama_alat' => $this->request->getVar('nama_alat'),
            'slug' => $slug,
            'brand' => $this->request->getVar('brand'),
            'capacity' => $this->request->getVar('capacity'),
            'sampul' => $namaSampul,
            'pdf' => $this->request->getVar('pdf')
        ]);

        session()->setFlashdata('pesan', 'Equipment berhasil ditambahkan');

        return redirect()->to('/equipment');
    }

    public function delete($id)
    {
        $this->equipmentModel->delete($id);
        session()->setFlashdata('pesan', 'Equipment berhasil dihapus');
        return redirect()->to('/equipment');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Equipment',
            'validation' => \Config\Services::validation(),
            'equipment' => $this->equipmentModel->getEquipment($slug)
        ];

        return view('admin/equipment/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('nama_alat'),'-',true);
        $this->equipmentModel->save([
            'id' => $id,
            'nama_alat' => $this->request->getVar('nama_alat'),
            'slug' => $slug,
            'brand' => $this->request->getVar('brand'),
            'capacity' => $this->request->getVar('capacity'),
            'pdf' => $this->request->getVar('pdf')
        ]);

        session()->setFlashdata('pesan', 'Equipment berhasil diubah');

        return redirect()->to('/equipment');
    }

}

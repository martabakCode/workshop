<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\MasterEventModel;
class MasterEventController extends ResourceController
{
    public function index()
    {
        $masterEvent = new MasterEventModel();
        $data['masterEvent'] = $masterEvent->findAll();

        return view('admin/pages/masterevents/list',$data);
    }

    public function show($id = null)
    {
        $db      = \Config\Database::connect();
        $masterEvent = $db->table('masterevents');
        $masterEvent->select('masterevents.id,masterevents.title,dataevents.id as idEvent,dataevents.nim,dataevents.name,
        dataevents.email,dataevents.phone,dataevents.instansi');
        $masterEvent->where('masterevents.id',$id);
        $masterEvent->join('dataevents', 'masterevents.id = dataevents.idEvents');
        $data['masterEvent'] = $masterEvent->get()->getResultArray();
        // return print_r($data['masterEvent']->getResultArray());
        return view('admin/pages/masterevents/detail',$data);
    }

    public function new()
    {
        return view('admin/pages/masterevents/tambah');
    }

    public function create()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $masterEvent = new MasterEventModel();
            $query = [
                "title" => $this->request->getPost('judul')
            ];
            $masterEvent->insert($query);
            return redirect('admin/masterevents');
        }
        return view('admin/pages/masterevents/tambah');
    }

    public function edit($id = null)
    {
        $masterEvent = new MasterEventModel();
        $data['masterEvent'] = $masterEvent->where('id',$id)->first();
        return view('admin/pages/masterevents/ubah',$data);
    }

    public function update($id = null)
    {
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $masterEvent = new MasterEventModel();
            $query = [
                "title" => $this->request->getPost('judul')
            ];
            $masterEvent->update($id,$query);
            return redirect('admin/masterevents');
        }
        return redirect()->to('admin/masterevents/'.$id.'/edit');
    }

    public function delete($id = null)
    {
        $masterEvent = new MasterEventModel();
        $masterEvent->delete($id);
        return redirect('admin/masterevents');
    }
}
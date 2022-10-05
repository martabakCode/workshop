<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\EventModel;
class AuthController extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('login');
    } 
 
    public function login()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    public function registration(){
        $nama = filter_var($this->request->getVar('nama'), FILTER_SANITIZE_STRING);
        $no_hp = filter_var($this->request->getVar('no_hp'), FILTER_SANITIZE_STRING);
        $instansi = filter_var($this->request->getVar('instansi'), FILTER_SANITIZE_STRING);
        $email = filter_var($this->request->getVar('email'), FILTER_SANITIZE_EMAIL);
        $option = $this->request->getVar('day');

        if($option == ""){
            session()->setFlashdata('error', 'Silahkan pilih kategori terlebih dahulu');
            return redirect()->to(base_url()."/#registration");
        }

        foreach($option as $day){
            if($day == 'HTML'){
                $model 		= new EventModel();
                $check_email= $model->check_email($email,1);
                $db      	= \Config\Database::connect();
                $Tpeserta  	= $db->table('dataevents')->where('idEvents',1);
                if($Tpeserta->countAllResults() < 40){
                    if($check_email){
                        session()->setFlashdata('inputs', $this->request->getPost());
                        session()->setFlashdata('error', 'Email sudah terdaftar');
                        return redirect()->to(base_url()."/#registration");
                    } else {
                        $peserta = [
                            // 'nim' => $nim,
                            'name' => $nama,
                            'phone' => $no_hp,
                            'instansi' => $instansi,
                            'email' => $email,
                            'day' => $day,
                            'idEvents' => 1
                        ];
                        $total = 40;
                        $data = $model->listing();
                        $pendaftar = count($data);
                        
                        $batas = strtotime(date("8-10-2022 23:59:59"));
                        $sekarang = strtotime(date("d-m-Y H:i:s"));
                        if($batas >= $sekarang){
                            if($pendaftar >= $total){
                                session()->setFlashdata('inputs', $this->request->getPost());
                                session()->setFlashdata('error', "Mohon maaf, kuota pendaftaran untuk kategori $category sudah penuh.");
                                return redirect()->to(base_url()."/#registration");
                            }
                            $urut = $Tpeserta->countAllResults()+1;
                            $emailTemplate = view("email1.php");
                            $emailTemplate = str_replace("[nama]",$nama,$emailTemplate);
                            $emailTemplate = str_replace("[hari ke]","HTML - Framework",$emailTemplate);
                            $emailTemplate = str_replace("[Tema hari itu]","Zero to Front-end Hero & The Programmer Starter Kit ",$emailTemplate);
                            $emailTemplate = str_replace("[Tanggal pelaksanaan]","15 Oktober 2022",$emailTemplate);
                            $email_smtp = \Config\Services::email();
                            $email_smtp->setFrom("noreply@hmtiudinus.org", "HMTI UDINUS");
                            $email_smtp->setTo("$email");
                            $email_smtp->setSubject("Konfirmasi Pendaftaran Peserta Workshop 2022 HTML - Framework");
                            // $email_smtp->setMessage("<div>Halo, $nama</div><div><br /></div><div>Terimakasih telah mendaftar sebagai Peserta di acara SEMNASTI 2022. Untuk para peserta diharapkan untuk bergabung kedalam whatsapp group agar mendapatkan informasi-informasi terbaru.</div><div>Berikut link whatsapp group :</div><div><br /></div><div>(Kasih tau nggak yaa xixixi)</div><div><br /></div><div>Salam, SEMNASTI 2022</div>");
                            $email_smtp->setMessage($emailTemplate);
                            $kirim = $email_smtp->send();
                            if($kirim){
                                $model->add($peserta);
                                session()->setFlashdata('success', 'Terima kasih telah mendaftar. Nantikan informasi dari kami yang akan dikirim ke email Anda.');
                                // return redirect()->to(base_url()."/#registration");  
                            } else {
                                session()->setFlashdata('inputs', $this->request->getPost());
                                session()->setFlashdata('error', 'Gagal mengirim email konfirmasi, silahkan coba lagi.');
                                // return redirect()->to(base_url()."/#registration");
                            }             
                        } else {
                            session()->setFlashdata('inputs', $this->request->getPost());
                            session()->setFlashdata('error', 'Mohon maaf, waktu pendaftaran sudah ditutup.');
                            // return redirect()->to(base_url()."/#registration");
                        }
                    }
                }
            } elseif ($day == 'C++') {
                $model 		= new EventModel();
                $check_email= $model->check_email($email,2);
                $db      	= \Config\Database::connect();
                $Tpeserta  	= $db->table('dataevents')->where('idEvents',2);
                if($Tpeserta->countAllResults() < 40){
                    if($check_email){
                        session()->setFlashdata('inputs', $this->request->getPost());
                        session()->setFlashdata('error', 'Email sudah terdaftar');
                        return redirect()->to(base_url()."/#registration");
                    } else {
                        $peserta = [
                            // 'nim' => $nim,
                            'name' => $nama,
                            'phone' => $no_hp,
                            'instansi' => $instansi,
                            'email' => $email,
                            'day' => $day,
                            'idEvents' => 2
                        ];
                        $total = 40;
                        $data = $model->listing();
                        $pendaftar = count($data);
                        
                        $batas = strtotime(date("8-10-2023 23:59:59"));
                        $sekarang = strtotime(date("d-m-Y H:i:s"));
                        if($batas >= $sekarang){
                            if($pendaftar >= $total){
                                session()->setFlashdata('inputs', $this->request->getPost());
                                session()->setFlashdata('error', "Mohon maaf, kuota pendaftaran untuk kategori $category sudah penuh.");
                                return redirect()->to(base_url()."/#registration");
                            }
                            $urut = $Tpeserta->countAllResults()+1;
                            $emailTemplate = view("email1.php");
                            $emailTemplate = str_replace("[nama]",$nama,$emailTemplate);
                            $emailTemplate = str_replace("[hari ke]","C++ - Github",$emailTemplate);
                            $emailTemplate = str_replace("[Tema hari itu]","To Get The Best Project",$emailTemplate);
                            $emailTemplate = str_replace("[Tanggal pelaksanaan]","15 Oktober 2022",$emailTemplate);
                            $email_smtp = \Config\Services::email();
                            $email_smtp->setFrom("noreply@hmtiudinus.org", "HMTI UDINUS");
                            $email_smtp->setTo("$email");
                            $email_smtp->setSubject("Konfirmasi Pendaftaran Peserta Workshop 2022 C++ - Github");
                            // $email_smtp->setMessage("<div>Halo, $nama</div><div><br /></div><div>Terimakasih telah mendaftar sebagai Peserta di acara SEMNASTI 2022. Untuk para peserta diharapkan untuk bergabung kedalam whatsapp group agar mendapatkan informasi-informasi terbaru.</div><div>Berikut link whatsapp group :</div><div><br /></div><div>(Kasih tau nggak yaa xixixi)</div><div><br /></div><div>Salam, SEMNASTI 2022</div>");
                            $email_smtp->setMessage($emailTemplate);
                            $kirim = $email_smtp->send();
                            if($kirim){
                                $model->add($peserta);
                                session()->setFlashdata('success', 'Terima kasih telah mendaftar. Nantikan informasi dari kami yang akan dikirim ke email Anda.');
                                // return redirect()->to(base_url()."/#registration");
                            } else {
                                session()->setFlashdata('inputs', $this->request->getPost());
                                session()->setFlashdata('error', 'Gagal mengirim email konfirmasi, silahkan coba lagi.');
                                // return redirect()->to(base_url()."/#registration");
                            }             
                        } else {
                            session()->setFlashdata('inputs', $this->request->getPost());
                            session()->setFlashdata('error', 'Mohon maaf, waktu pendaftaran sudah ditutup.');
                            // return redirect()->to(base_url()."/#registration");
                        }
                        
                    }
                }
            } else {
                session()->setFlashdata('inputs', $this->request->getPost());
                session()->setFlashdata('error', 'Mohon maaf, kuota pendaftaran sudah penuh.');
                // return redirect()->to(base_url()."/#registration");
            }
        }
        return redirect()->to(base_url()."/#registration");
    }

    public function reminder(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "POST"){
            $db = \Config\Database::connect();
            $query1   = $db->query('SELECT name, email FROM dataevents WHERE idEvents ='.$this->request->getPost('idEvents').' AND status=1');
            $results1 = $query1->getResult();
            $select = $this->request->getVar('selection');
            $total = 0;
            if($select == ""){
                session()->setFlashdata('error', 'Silahkan pilih reminder terlebih dahulu');
            }
            
            if ($select == "Sertifikat") {
                foreach ($results1 as $row) {
                    $emailTemplate = view("emailsertif1.php");
                    $emailTemplate = str_replace("[nama]", $row->name, $emailTemplate);
                    $emailTemplate = str_replace("[Tanggal pelaksanaan]", "15 Oktober 2022", $emailTemplate);
                    $email_smtp = \Config\Services::email();
                    $email_smtp->setFrom("noreply@hmtiudinus.org", "HMTI UDINUS");
                    $email_smtp->setTo("$row->email");
                    $email_smtp->setSubject("📢REMINDER Workshop 2022📢");
                    $email_smtp->setMessage($emailTemplate);
                    $kirim = $email_smtp->send();
                    $total++;
                }
                
                if ($total == count($results1)) {
                    session()->setFlashdata('success', 'Berhasil mengirim reminder');
                    return redirect()->to(base_url()."/admin/masterevents");
                } else {
                    session()->setFlashdata('inputs', $this->request->getPost());
                    session()->setFlashdata('error', 'Gagal mengirim reminder, silahkan coba lagi');
                    return redirect()->to(base_url()."/admin/masterevents");
                }
            } elseif ($select == "D1 H-1") {
                foreach ($results1 as $row) {
                    $emailTemplate = view("email1h1.php");
                    $emailTemplate = str_replace("[nama]", $row->name, $emailTemplate);
                    $email_smtp = \Config\Services::email();
                    $email_smtp->setFrom("noreply@hmtiudinus.org", "HMTI UDINUS");
                    $email_smtp->setTo("$row->email");
                    $email_smtp->setSubject("📢REMINDER Workshop 2022📢");
                    $email_smtp->setMessage($emailTemplate);
                    $kirim = $email_smtp->send();
                    $total++;
                }
                if ($total == count($results1)) {
                    session()->setFlashdata('success', 'Berhasil mengirim reminder');
                    return redirect()->to(base_url()."/admin/masterevents");
                } else {
                    session()->setFlashdata('inputs', $this->request->getPost());
                    session()->setFlashdata('error', 'Gagal mengirim reminder, silahkan coba lagi');
                    return redirect()->to(base_url()."/admin/masterevents");
                }
            } elseif ($select == "D1 H-2") {
                foreach ($results1 as $row) {
                    $emailTemplate = view("email1h2.php");
                    $emailTemplate = str_replace("[nama]", $row->name, $emailTemplate);
                    $email_smtp = \Config\Services::email();
                    $email_smtp->setFrom("noreply@hmtiudinus.org", "HMTI UDINUS");
                    $email_smtp->setTo("$row->email");
                    $email_smtp->setSubject("📢REMINDER Workshop 2022📢");
                    $email_smtp->setMessage($emailTemplate);
                    $kirim = $email_smtp->send();
                    $total++;
                }
                if ($total == count($results1)) {
                    session()->setFlashdata('success', 'Berhasil mengirim reminder');
                    return redirect()->to(base_url()."/admin/masterevents");
                } else {
                    session()->setFlashdata('inputs', $this->request->getPost());
                    session()->setFlashdata('error', 'Gagal mengirim reminder, silahkan coba lagi');
                    return redirect()->to(base_url()."/admin/masterevents");
                }
            } else {
                session()->setFlashdata('inputs', $this->request->getPost());
                session()->setFlashdata('error', 'Tidak ada pilihan');
                return redirect()->to(base_url()."/admin/masterevents");
            }
        }
    }

    public function pay($id = null){
        $db = \Config\Database::connect();
        $query1   = $db->query('SELECT name, email, idEvents FROM dataevents WHERE id = '.$id);
        $results1 = $query1->getResult();
        
        $event = new EventModel();

        $query = [
            "status" => 1
        ];
        $event->update($id,$query);
        $data = $event->where('id',$id)->first();
        $emailTemplate = view("emailpay.php");
        $emailTemplate = str_replace("[nama]", $data['name'], $emailTemplate);
        $email_smtp = \Config\Services::email();
        $email_smtp->setFrom("noreply@hmtiudinus.org", "HMTI UDINUS");
        $email_smtp->setTo($data['email']);
        $email_smtp->setSubject("📢Konfirmasi Pembayaran Workshop 2022📢");
        $email_smtp->setMessage($emailTemplate);
        $kirim = $email_smtp->send();
        return redirect()->to(base_url()."/admin/masterevents");
    }
}

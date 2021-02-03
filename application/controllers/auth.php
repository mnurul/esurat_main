<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        // $this->load->model('model_auth', '', TRUE);
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        //membuat rules utk email
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        // membuat rules utk password
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('templateslogin/header', $data);
            $this->load->view('form_login');
            $this->load->view('templateslogin/footer');
        } else {
            // validasinya success
            $this->login();
        }
    }

    public function login()
    {
        $data['title'] = 'Halaman Login';

        // membuat form validation untuk username dan password
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib diisi']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templateslogin/header', $data);
            $this->load->view('form_login');
            $this->load->view('templateslogin/footer');
        } else {
            $email     = $this->input->post('email');
            $password     = $this->input->post('password');
            $auth = $this->model_auth->cek_login($email, $password);



            // var_dump($auth, $email, $password);
            // die();

            if ($auth->is_active == "0") {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Email Kamu Belum Diaktifkan Silahkan aktifkan!!!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                redirect('auth/login');
            }

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Email atau Password Kamu Salah!!!.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('role_id', $auth->role_id);
                $this->session->set_userdata('is_login', true);

                if ($auth->role_id == "1") {
                    $this->session->set_userdata('email', $auth->email);
                    // $this->session->set_userdata('nama', $auth->nama);
                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('id_user', $auth->id_user);
                    $this->session->set_userdata('nik', $auth->nik);
                    redirect('Manage_profile/index');
                } else if ($auth->role_id == "2") {
                    $this->session->set_userdata('email', $auth->email);
                    // $this->session->set_userdata('nama', $auth->nama);
                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('id_user', $auth->id_user);
                    $this->session->set_userdata('nik', $auth->nik);
                    redirect('pageWarga/index');
                } else if ($auth->role_id == "3") {
                    $this->session->set_userdata('email', $auth->email);
                    // $this->session->set_userdata('nama', $auth->nama);
                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('id_user', $auth->id_user);
                    $this->session->set_userdata('nik', $auth->nik);

                    $nik = $auth->nik;
                    $getRw = $this->model_auth->getRw($nik);
                    $this->session->set_userdata('rw', $getRw->rw);
                    redirect('pageRW/index');
                } else if ($auth->role_id == "4") {
                    $this->session->set_userdata('email', $auth->email);
                    $this->session->set_userdata('nik', $auth->nik);

                    $nik = $auth->nik;
                    $getRt = $this->model_auth->getRt($nik);
                    $this->session->set_userdata('rt', $getRt->rt);
                    // var_dump($getRt->rt);
                    // die();
                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('id_user', $auth->id_user);
                    $this->session->set_userdata('nik', $auth->nik);
                    redirect('pageRT/index');
                } else if ($auth->role_id == "5") {
                    $this->session->set_userdata('email', $auth->email);
                    // $this->session->set_userdata('nama', $auth->nama);
                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('id_user', $auth->id_user);
                    $this->session->set_userdata('nik', $auth->nik);
                    redirect('pageAparat/index');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Username atau Password Kamu Salah!!!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                    redirect('auth/login');
                }
            }
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'is_unique' => 'Email Kamu Udah Terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches'    => 'Password Kamu Tidak Cocok!',
            'min_length' => 'Password Kamu Terlalu Pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buat Akun Kelurahan';
            $this->load->view('templateslogin/header', $data);
            $this->load->view('form_registrasi');
            $this->load->view('templateslogin/footer');
        } else {
            $email = $this->input->post('email', true);

            $data = [
                'nik'     => $this->input->post('nik'),
                'nama'         => htmlspecialchars($this->input->post('nama', true)),
                'username'     => $this->input->post('username'),
                'email'        => htmlspecialchars($email),
                'password'     => $this->input->post('password1'),
                'role_id'      => 2,
                'is_active'    => 0,
                'date_created' => date("Y-m-d"),
            ];
            // var_dump($data);
            // die();

            // $data_tb_kurir = [
            //     'nama'         => htmlspecialchars($this->input->post('name', true)),
            //     'tempat_lahir' => $this->input->post('tempat_lahir'),
            //     'tgl_lahir' => $this->input->post('tgl_lahir'),
            //     'alamat'           => $this->input->post('alamat'),
            //     'no_telp'          => $this->input->post('no_telp'),
            //     'email'            => htmlspecialchars($email),
            //     'agama'            => $this->input->post('agama'),
            //     'jkel'               => $this->input->post('jkel'),
            // ];

            // menyiapkan token dan dibungkus dengan base64_encode
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email'        => $email,
                'token'        => $token,
                'date_created' => date("Y-m-d")
            ];

            $this->db->insert('tb_user', $data);
            // $this->db->insert('tb_kurir', $data_tb_kurir);
            $this->db->insert('user_token', $user_token);
            $this->_sendEmail($token, 'verify');

            // $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat! Akun Kamu Sudah Dibuat. Silahkan Aktifkan dan Cek Email</div>');
            redirect('auth/login');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            // 'smtp_host' => 'ssl://smtp.googlemail.com',
            // 'smtp_host' => 'smtp.googlemail.com',
            'smtp_user' => 'mnurulislam05@gmail.com',
            'smtp_pass' => 'nurulislam10',
            'smtp_port' => '465',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        // memanggil library email dan membutuhkan parameternya di ci
        $this->load->library('email', $config);
        // sintax ini utuk mengirim email aktiv dari registrasi yg baru di buat!!!!
        $this->email->initialize($config);

        // siapkan email dan memberitahu email itu dikirim dari siapa
        $this->email->from('mnurulislam05@gmail.com', 'DIMS');
        $this->email->to($this->input->post('email'));

        // verify ini sama dengan yg ada di atas(sendEmail), cek verifikasi
        if ($type == 'verify') {
            $this->email->subject('Akun Verifikasi');
            $this->email->message('Klik Link Ini Buat Registrasi AKun Kamu : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifkan</a>');  //sintax ini utk membuat link aktivasi ke gmail
        } else if ($type == 'forgot') {
            $this->email->subject('Riset Password');
            $this->email->message('Klik Link Ini Buat Riset Password : <a href="' . base_url() . 'auth/resetpassword?email=' .
                $this->input->post('email') . '&token=' . urlencode($token) . '">Riset Password</a>');  //sintax ini utk membuat link aktivasi ke gmail
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            // die;  //jangan pake die....jadi error saat ngirim email
            // echo $this->email->print_debugger();
        }
    }

    // function ini yg akan melakukan verifikasi terhadap link yg dikirim dari email, tentang nomer token dan email didatabase(user_token)
    public function verify()
    {
        $email = $this->input->get('email');     //ngambil data yg ada di database melalui input 
        $token = $this->input->get('token');
        // $user = $this->db->get_where('user', ['email' => $email])->row_array();     // Membuat variabel(inisial $user) dan mengambil data email dari tabel user. 
        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();     // membuat variabel(inisial $user_token) dan mengambil data token dari tabel user_token. 
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) { //utk mengecek waktu saat aktivasi expired atau tdk, 
                    $this->db->set('is_active', 1);   //jika menggunakan query bilder, merubah is_aktive dari 0 menjadi 1.
                    $this->db->where('email', $email);
                    // $this->db->update('user');
                    $this->db->update('tb_user');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">' . $email . ' Sudah Aktif! Silahkan Login.</div>');
                    redirect('auth');
                } else {
                    // menghapus user yg expired di masing" tabel
                    // $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('tb_user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Aktifasi Gagal! TOKEN KADALUARSA!!!.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun Aktifasi Gagal! TOKEN SALAH!!!.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Aktifasi Gagal! EMAIL SALAH!!!.</div>');
            redirect('auth');
        }
    }


    public function logout()
    {
        // sess_destroy digunakan untuk menghancurkan session yg sudah masuk
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

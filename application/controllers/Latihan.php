    <?php
    // defined('BASEPATH') or exit('No direct script access allowed');

    class Latihan extends CI_Controller
    {
        // public $model;

        function __construct()
        {
            parent::__construct();
            $this->load->model('Model_latihan1');
            // $this->model = $this->Model_latihan1;
        }

        public function index()
        {
            $this->load->view('contoh1_message');
        }
        public function penjumlahan($n1 = null, $n2 = null)
        {
            // $this->load->model('Model_latihan1');
            //     $hasil = $this->Model_latihan1->jumlah($n1, $n2);
            //     echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
            $data['nilai1'] = $n1;
            $data['nilai2'] = $n2;
            $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
            $this->load->view("view_latihan1", $data);
        }
        public function formu()
        {
            return $this->load->view("view-form-matakuliah");
        }
    }

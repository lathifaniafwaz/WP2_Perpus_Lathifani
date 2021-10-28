<?php
class tokosepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('view-form-tokosepatu');
    }

    public function cetak()
    {
        $this->load->model('model_tokosepatu');
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merk' => $this->input->post('merk'),
                'harga' => $this->model_tokosepatu->proses($this->input->post('merk')),
                'ukuran' => $this->input->post('ukuran')
            ];

            $this->load->view('view-data-tokosepatu', $data);

    }
}
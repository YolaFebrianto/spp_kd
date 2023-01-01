<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_student extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_student') == NULL) {
            header("Location:" . site_url('student/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model(array('student/Student_model', 'bulan/Bulan_model', 'setting/Setting_model','bebas/Bebas_model', 'information/Information_model', 'bebas/Bebas_pay_model', 'period/Period_model'));
    }

    public function index() {
        $id = $this->session->userdata('uid'); 

        $data['information'] = $this->Information_model->get(array('information_publish'=>1));
        $data['bulan'] = $this->Bulan_model->get(array('status'=>0, 'period_status'=>1, 'student_id'=> $this->session->userdata('uid_student')));
        $data['bebas'] = $this->Bebas_model->get(array('period_status'=>1, 'student_id'=> $this->session->userdata('uid_student')));

        $data['total_bulan'] =0;
        foreach ($data['bulan'] as $row) {
            $data['total_bulan'] += $row['bulan_bill'];
        }

        $data['total_bebas'] =0;
        foreach ($data['bebas'] as $row) {
            $data['total_bebas'] += $row['bebas_bill'];
        }

        $data['total_bebas_pay'] =0;
        foreach ($data['bebas'] as $row) {
            $data['total_bebas_pay'] += $row['bebas_total_pay'];
        }



        $data['title'] = 'Dashboard';
        $data['main'] = 'dashboard/dashboard_student';
        $this->load->view('student/layout', $data);
    }

    public function cek_bayar($offset = NULL) {
        // Apply Filter
        // Get $_GET variable
        $f = $this->input->get(NULL, TRUE);

        $data['f'] = $f;

        $siswa['student_id'] = '';
        $params = array();
        $param = array();
        $pay = array();

        // Tahun Ajaran
        if (isset($f['n']) && !empty($f['n']) && $f['n'] != '') {
            $params['period_id'] = $f['n'];
            $pay['period_id'] = $f['n'];
        }

        // Siswa
        if (isset($f['r']) && !empty($f['r']) && $f['r'] != '') {
            $params['student_nis'] = $f['r'];
            $param['student_nis'] = $f['r'];
            $siswa = $this->Student_model->get(array('student_nis'=>$f['r']));
        }

        // echo "<pre>";
        // print_r ($siswa);
        // echo "</pre>";
        // die();

        $params['group'] = TRUE;
        $pay['paymentt'] = TRUE;
        $param['status'] = 1;
        $pay['student_id']=$siswa['student_id'];


        $paramsPage = $params;
        $data['period'] = $this->Period_model->get($params);
        $data['siswa'] = $this->Student_model->get(array('student_id'=>$siswa['student_id'], 'group'=>TRUE));
        $data['student'] = $this->Bulan_model->get($pay);
        $data['bebas'] = $this->Bebas_model->get($pay);
        $data['free'] = $this->Bebas_pay_model->get($params);
        $data['dom'] = $this->Bebas_pay_model->get($params);
        $data['bill'] = $this->Bulan_model->get_total($params);
        $data['bulan'] = $this->Bulan_model->get(array('student_id'=>$siswa['student_id']));
        $data['in'] = $this->Bulan_model->get_total($param);
        $data['setting_logo'] = $this->Setting_model->get(array('id' => 6));
        $data['setting_school'] = $this->Setting_model->get(array('id' => 1));

        $data['total'] = 0;
        foreach ($data['bill'] as $key) {
            $data['total'] += $key['bulan_bill'];
        }

        $data['pay'] = 0;
        foreach ($data['in'] as $row) {
            $data['pay'] += $row['bulan_bill'];
        }

        $data['pay_bill'] = 0;
        foreach ($data['dom'] as $row) {
            $data['pay_bill'] += $row['bebas_pay_bill'];
        }

        $config['base_url'] = site_url('home/index');
        $config['suffix'] = '?' . http_build_query($_GET, '', "&");
        $config['total_rows'] = count($this->Bulan_model->get($paramsPage));

        $data['title'] = 'Cek Tagihan Siswa';
        $data['main'] = 'student/cek_bayar';
        $this->load->view('student/layout', $data);
    }


}

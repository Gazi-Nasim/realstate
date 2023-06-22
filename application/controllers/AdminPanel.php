<?php
class AdminPanel extends CI_Controller
{
    public function index()
    {
        $this->load->view('adminPanel/index');
    }

    public function signin()
    {
        $mail = $this->input->post("email");
        $pass = $this->input->post("password");

        $this->load->model('Admin_model');
        $data = $this->Admin_model->login($mail, $pass);

        if ($data != null) {

            $this->session->set_userdata([
                'id' => $data->id,
                'username' => $data->name,
                'email' => $data->email,
                'phone' => $data->phone,
                'role' => $data->role
            ]);
            redirect(base_url('adminPanel/dashboard'));
        } else {

            redirect(base_url('adminPanel/index'));
        }
    }

    public function dashboard()
    {
        $this->load->view('adminPanel/dashboard');
    }

    public function homeSlider()
    {
        $this->load->model('Admin_model');
        $data['pro'] = $this->Admin_model->getslid();
        $this->load->view('adminPanel/homeSlider', $data);
    }
    public function con_list()
    {
        $this->load->model('Admin_model');
        $data['con_lst'] = $this->Admin_model->list_contact();
        $this->load->view('adminPanel/contacts', $data);
    }

    public function save_homeSlider()
    {
        $this->load->library('form_validation');
        // $conf = array(
        //     array(
        //         'field' => 'perps',
        //         'label' => 'Property',
        //         'rules' => 'required'
        //     ),
        //     array(
        //         'field' => 'photo',
        //         'label' => 'Photo',
        //         'rules' => 'required'
        //     ),
        //     array(
        //         'field' => 'type',
        //         'label' => 'Type',
        //         'rules' => 'required'
        //     ),
        //     array(
        //         'field' => 'price',
        //         'label' => 'Price',
        //         'rules' => 'required|number'
        //     ),

        //     array(
        //         'field' => 'hdline',
        //         'label' => 'Headline',
        //         'rules' => 'required'
        //     ),

        //     array(
        //         'field' => 'adrs',
        //         'label' => 'Address',
        //         'rules' => 'required'
        //     ),

        //     array(
        //         'field' => 'size',
        //         'label' => 'Size',
        //         'rules' => 'required|number'
        //     ),

        //     array(
        //         'field' => 'bed',
        //         'label' => 'Bed',
        //         'rules' => 'required|number'
        //     ),
        //     array(
        //         'field' => 'bath',
        //         'label' => 'Bath',
        //         'rules' => 'required|number'
        //     )

        // );
        // $this->form_validation->set_rules($conf);

        // if ($this->form_validation->run() == true) {

        $perps = $this->input->post('perps');
        $type = $this->input->post('type');
        $price = $this->input->post('price');
        $hdline = $this->input->post('hdline');
        $adrs = $this->input->post('adrs');
        $size = $this->input->post('size');
        $bed = $this->input->post('bed');
        $bath = $this->input->post('bath');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|JPG|PNG|GIF';
        $config['max_size']             = 100000;
        $config['max_width']            = 100024;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        $this->load->model('Admin_model');

        if (!$this->upload->do_upload('pho')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            $photo = '';
        } else {
            $dta =  $this->upload->data();
            $photo = $dta['file_name'];
        }

        $data['pro'] = $this->Admin_model->save_slid($perps, $photo, $type, $price, $hdline, $adrs, $size, $bed, $bath);
        redirect(base_url('AdminPanel/homeSlider'));

        // if (!$this->upload->do_upload('pho')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     print_r($error);
        // } else {
        //     $d = $this->upload->data();
        //     $photo=$d['file_name'];
        // $data['photo']=$d['file_name'];
        // }
        // } else {


        // }
    }

    public function propDele($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->delProp($id);
        redirect(base_url('AdminPanel/homeSlider'));
    }

    public function slidHome()
    {
        $this->load->model('Admin_model');
        $this->Admin_model->delProp($id);
        $this->load->view('adminPanel/homeSlide_edit', $data);
    }

    public function propEdit($id)
    {
        $this->load->model('Admin_model');
        $data['slidPro'] = $this->Admin_model->editProp($id);
        var_dump($data);
        $this->load->view('adminPanel/homeSlide_edit', $data);
        // redirect(base_url('AdminPanel/slidHome'));
    }

    public function save_edit_homeSlider($id)
    {
        $perps = $this->input->post('perps');
        $type = $this->input->post('type');
        $price = $this->input->post('price');
        $hdline = $this->input->post('hdline');
        $adrs = $this->input->post('adrs');
        $size = $this->input->post('size');
        $bed = $this->input->post('bed');
        $bath = $this->input->post('bath');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 100024;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        $this->load->model('Admin_model');
        $in_data = [

            'perps' => $perps,
            'type' => $type,
            'price' => $price,
            'headline' => $hdline,
            'address' => $adrs,
            'size' => $size,
            'bed' => $bed,
            'bath' => $bath
        ];

        if (!$this->upload->do_upload('pho')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $dta =  $this->upload->data();
            $in_data['picture'] = $dta['file_name'];
        }

        $data['pro'] = $this->Admin_model->update_slid($in_data, $id);
        redirect(base_url('AdminPanel/homeSlider'));
    }




    public function log_out()
    {
        $sesso = array(
            'id' => '',
            'username' => '',
            'email' => '',
            'phone' => '',
            'role' => ''
        );

        $this->session->unset_userdata($sesso);
        redirect(base_url('adminPanel/index'));
    }
}

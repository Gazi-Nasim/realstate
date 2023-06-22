<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pages/home');
	}

	public function about()
	{
		$this->load->view('pages/about');
	}

	public function properties()
	{
		$this->load->model('Admin_model');
		$data['prolist'] = $this->Admin_model->getslid();
		$this->load->view('pages/property_list', $data);
	}

	public function contact()
	{
		$this->load->view('pages/contact');
	}

	public function proList()
	{
		$this->load->view('pages/contact');
	}

	public function contactus()
	{
		$name = $this->input->post('name');
		$mail = $this->input->post('mail');
		$sub = $this->input->post('sub');
		$msg = $this->input->post('msg');

		$this->load->model('Admin_model');
		$this->Admin_model->save_cotact($name, $mail, $sub, $msg);
		$this->load->view('pages/contact');
	}

	public function friends_lst()
	{
		$this->load->library('pagination');
		$this->load->model('Admin_model');
		$config['base_url'] = base_url('Welcome/friends_lst');
		$config['total_rows'] = $this->Admin_model->get_frnds_row();
		$config['per_page'] = 5;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['fnds'] = $this->Admin_model->get_frnds($config['per_page'], $page);
		$data['page'] = $this->pagination->create_links();
		$this->load->view('pages/friends', $data);
	}

	public function products()
	{
		$this->load->model('Admin_model');
		$d['pro'] = $this->Admin_model->all_pordts();
		$this->load->view('pages/products', $d);
	}

	public function shopping_cart($id)
	{

		$this->load->library('cart');
		$name = $this->input->post('productName');
		$price = $this->input->post('price');

		$data['p'] =[
			'id'      => $id,
			'qty'     => 1,
			'price'   => $price,
			'name'    => $name,
			'options' => array('Size' => 'L', 'Color' => 'Red')
		];
		
		$this->load->view('pages/carts', $data);
		var_dump($data);
		
	}

	public function cart()
	{
		$this->load->library('cart');
		$d['p'] = $this->cart->contents();
		$d['t'] = $this->cart->total();
		$this->load->view('pages/carts', $d);
	}

	public function add_product($id)
	{
		$this->load->library('cart');
		$d['p'] = $this->cart->contents()->where($id);
		$d['t'] = $this->cart->total();
		$this->load->view('pages/cart_add', $d);
	}

	public function sum()
	{
		$this->load->helper('count');
		echo add(4, -9);
	}

	public function sumlbr()
	{
		$this->load->library('Number');
		echo $this->number->smm(9, 14);
	}

	public function apiFri()
	{
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_frnds_api();
		$this->output->set_content_type('application/json')
			->set_output(json_encode($data));
	}
}

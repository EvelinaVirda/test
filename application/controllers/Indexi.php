<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Indexi extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model(['News_model','Product_model']);
	}

	public function index()
	{
		$this->load->view('pages/template/header');
		$this->load->view('pages/template/navbar');
		$this->load->view('pages/template/top');
		$this->load->view('pages/home');
		$this->load->view('pages/template/footer');
	}

	public function about()
	{
		$this->load->view('pages/template/header');
		$this->load->view('pages/template/navbar');
		$this->load->view('pages/template/top');
		$this->load->view('pages/about');
		$this->load->view('pages/template/footer');
	}

	// NEWS

	public function news()
	{
		$data['news'] = $this->News_model->getSomeNews();

		$this->load->view('pages/template/header');
		$this->load->view('pages/template/navbar');
		$this->load->view('pages/news',$data);
		$this->load->view('pages/template/footer');
	}

	public function readmore($id_news)
	{
		$data['readmore'] = $this->News_model->readmore($id_news);

		$this->load->view('pages/template/header');
		$this->load->view('pages/template/navbar');
		$this->load->view('pages/readmore',$data);
		$this->load->view('pages/template/footer');
	}

	// PRODUCT

	public function product()
	{
		$data['product'] = $this->Product_model->getAllProduct();

		$this->load->view('pages/template/header');
		$this->load->view('pages/template/navbar');
		$this->load->view('pages/product',$data);
		$this->load->view('pages/template/footer');
	}
}

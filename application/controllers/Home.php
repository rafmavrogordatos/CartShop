<?php

class Home extends CI_Controller
{
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('pages/home');
		$this->load->view('layout/footer');
	}
	public function about(){
		$this->load->view('layout/header');
		$this->load->view('pages/about');
		$this->load->view('layout/footer');
	}
	public function login(){
		$this->load->view('layout/header');
		$this->load->view('auth/login');
		$this->load->view('layout/footer');
	}
}

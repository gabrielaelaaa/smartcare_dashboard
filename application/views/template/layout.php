<?php
$data = ['username' => $username, 'role' => $role];
$this->load->view('template/header');
$this->load->view('template/topbar');
$this->load->view('template/sidebar', $data);
$this->load->view('Konten/' . $konten);
$this->load->view('template/_footer') ;?>


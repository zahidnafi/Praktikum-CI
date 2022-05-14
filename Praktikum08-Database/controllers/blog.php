<?php
class blog extends CI Controller{
    // buat method index untuk menampilkan data
    public function index(){
        echo "ini adalah halaman index";
        $this->load->view("blog/index", $data);
    }
    // buat method add untuk menambahka data blog
    public function add(){
        $this->load->view("blog/add");
    }
}
?>
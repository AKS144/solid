<?php

namespace App\Repository\Product;

interface InterfaceProduct{
    public function index();
    // public function create();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function delete($id);

}


?>
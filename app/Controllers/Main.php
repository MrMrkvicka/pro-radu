<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Hraci;

class Main extends BaseController
{

    var $hraci;

    public function __construct()
    {
        $this->hraci = new Hraci();

    }

    public function index()
    {
        echo view("index");
    }

    public function karty()
    {
        echo view("karty");
    }

    public function home()
    {
        echo view("home");
    }

    public function zapasy()
    {
        echo view("zapasy");
    }

    public function carousel()
    {
        echo view("carousel");
    }
    public function polaci()
    {
        $polaci = $this->hraci->where("country", "pl")->findAll();
        $data["hraci"] = $polaci;
        echo view("polaci", $data);

        // echo view("polaci",["hraci" => $polaci]);
    
    }

}

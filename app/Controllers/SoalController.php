<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class SoalController
{
    // Show the product attributes based on the id.
	public function soal1(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/soal1.php';
	}

	public function soal2(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/soal2.php';
	}

	public function soal3(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/soal3.php';
	}

	public function departement(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/departement.php';
	}

	public function karyawan(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/karyawan.php';
	}

	public function soal4(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/soal4.php';
	}
	
	public function soal5(RouteCollection $routes)
	{
        require_once APP_ROOT . '/views/soal5.php';
	}
}
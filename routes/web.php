<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));

$routes->add('soal1', new Route(constant('URL_SUBFOLDER') . '/soal-1', array('controller' => 'SoalController', 'method'=>'soal1'), array()));
$routes->add('soal2', new Route(constant('URL_SUBFOLDER') . '/soal-2', array('controller' => 'SoalController', 'method'=>'soal2'), array()));
$routes->add('soal3', new Route(constant('URL_SUBFOLDER') . '/soal-3', array('controller' => 'SoalController', 'method'=>'soal3'), array()));
$routes->add('departement-page', new Route(constant('URL_SUBFOLDER') . '/departement', array('controller' => 'SoalController', 'method'=>'departement'), array()));
$routes->add('karyawan-page', new Route(constant('URL_SUBFOLDER') . '/karyawan', array('controller' => 'SoalController', 'method'=>'karyawan'), array()));
$routes->add('soal-4', new Route(constant('URL_SUBFOLDER') . '/soal-4', array('controller' => 'SoalController', 'method'=>'soal4'), array()));
$routes->add('soal-5', new Route(constant('URL_SUBFOLDER') . '/soal-5', array('controller' => 'SoalController', 'method'=>'soal5'), array()));

$routes->add('add-karyawan', new Route(constant('URL_SUBFOLDER') . '/add-karyawan', array('controller' => 'KaryawanController', 'method'=>'addKaryawan'), array()));
$routes->add('get-all-karyawan', new Route(constant('URL_SUBFOLDER') . '/get-all-karyawan', array('controller' => 'KaryawanController', 'method'=>'getAllKaryawan'), array()));
$routes->add('hapus-karyawan', new Route(constant('URL_SUBFOLDER') . '/hapus-karyawan/{id}', array('controller' => 'KaryawanController', 'method'=>'hapusKaryawan'), array('id' => '[a-zA-Z0-9\-]+')));
$routes->add('ubah-karyawan', new Route(constant('URL_SUBFOLDER') . '/ubah-karyawan/{id}', array('controller' => 'KaryawanController', 'method'=>'editKaryawan'), array('id' => '[a-zA-Z0-9\-]+')));
$routes->add('get-karyawan-birth-day', new Route(constant('URL_SUBFOLDER') . '/get-karyawan-birth-day', array('controller' => 'KaryawanController', 'method'=>'birthDayKaryawan'), array()));

$routes->add('get-departement', new Route(constant('URL_SUBFOLDER') . '/get-departement/{id}', array('controller' => 'DepartementController', 'method'=>'getDepartement'), array('id' => '[0-9]+')));
$routes->add('get-all-departement', new Route(constant('URL_SUBFOLDER') . '/get-all-departement', array('controller' => 'DepartementController', 'method'=>'getAllDepartement'), array()));
$routes->add('add-departement', new Route(constant('URL_SUBFOLDER') . '/add-departement', array('controller' => 'DepartementController', 'method'=>'addDepartement'), array()));
$routes->add('edit-departement', new Route(constant('URL_SUBFOLDER') . '/edit-departement/{id}', array('controller' => 'DepartementController', 'method'=>'editDepartement'), array('id' => '[0-9]+')));
$routes->add('delete-departement', new Route(constant('URL_SUBFOLDER') . '/delete-departement/{id}', array('controller' => 'DepartementController', 'method'=>'hapusDepartement'), array('id' => '[0-9]+')));
$routes->add('mapping-departement', new Route(constant('URL_SUBFOLDER') . '/mapping-departement', array('controller' => 'DepartementController', 'method'=>'mappingDepartemen'), array()));
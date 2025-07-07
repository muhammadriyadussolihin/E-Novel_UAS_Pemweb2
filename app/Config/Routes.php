<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// General route
$routes->get('/', 'PublicController::index');

// Validation Login,Register & Logout Route
$routes->get('/login', 'PublicController::login');
$routes->get('/logout', 'ValidationController::proses_logout');
$routes->post('/login/proses_login', 'ValidationController::proses_login');
$routes->get('/hidden/register', 'PublicController::register');
$routes->post('/hidden/register/proses_register', 'ValidationController::proses_register');


// Routes Admin
$routes->get('/admin/home', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/admin/databuku', 'AdminController::databuku');
$routes->get('/admin/databuku/tambah', 'AdminController::tambahbuku');
$routes->post('/admin/databuku/tambah/proses_tambah', 'AdminController::simpanbuku');
$routes->get('/admin/databuku/edit/(:any)', 'AdminController::index');
$routes->post('/admin/databuku/edit/(:any)', 'AdminController::editbuku/$1');
$routes->put('/admin/databuku/edit/proses_edit', 'AdminController::simpaneditbuku');
$routes->get('/admin/databuku/detail/(:any)', 'AdminController::index');
$routes->post('/admin/databuku/detail/(:any)', 'AdminController::detailbuku/$1');
$routes->get('/admin/databuku/hapus/(:any)', 'AdminController::index');
$routes->delete('/admin/databuku/hapus/(:any)', 'AdminController::hapusbuku/$1');
$routes->get('/admin/datapeminjam', 'AdminController::datapeminjam');
$routes->get('/admin/datapeminjam/tambah', 'AdminController::tambahpeminjam');
$routes->post('/admin/datapeminjam/tambah/proses_tambah', 'AdminController::simpanpeminjam');
$routes->get('/admin/datapeminjam/kembalikan/(:any)', 'AdminController::index');
$routes->post('/admin/datapeminjam/kembalikan/(:any)', 'AdminController::kembalikanbuku/$1');
$routes->get('/admin/datapeminjam/hapus/(:any)', 'AdminController::index');
$routes->delete('/admin/datapeminjam/hapus/(:any)', 'AdminController::hapuspeminjam/$1');

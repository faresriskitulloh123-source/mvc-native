<?php 
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/mahasiswa.php';
require_once __DIR__ . '/../controllers/mahasiswacontroller.php';
  
$db = (new Database())->connect(); 
$model = new Mahasiswa($db); 
$controller = new MahasiswaController($model); 
  
$page = $_GET['page'] ?? 'mahasiswa'; 
$action = $_GET['action'] ?? 'index'; 
  
if ($page !== 'mahasiswa') { 
    http_response_code(404); 
    exit('Halaman tidak ditemukan.'); 
} 
  
match ($action) { 
    'index'  => $controller->index(), 
    'create' => $controller->create(), 
    'store'  => $controller->store(), 
    'edit'   => $controller->edit(), 
    'update' => $controller->update(), 
    'delete' => $controller->delete(), 
    default  => (function () { 
        http_response_code(404); 
        exit('Action tidak ditemukan.'); 
    })() 
}; 
?> 
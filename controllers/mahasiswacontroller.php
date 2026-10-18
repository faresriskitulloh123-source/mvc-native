<?php
class MahasiswaController
{
    public function __construct(private Mahasiswa $model) {}
    
    public function index(): void
 {
    $mahasiswa = $this->model->getAll();
    require __DIR__ . '/../views/mahasiswa/index.php';
 }

 public function create(): void
 {
    require __DIR__ . '/../views/mahasiswa/create.php';
 }
 public function store(): void
 {
    $data = $this->validateInput($_POST);
    $this->model->insert($data);
    header('Location: index.php?page=mahasiswa');
    exit;
 }
 public function edit(): void
 {
    $id = (int) ($_GET['id'] ?? 0);
    $mahasiswa = $this->model->findById($id);
    
    if (!$mahasiswa){
         http_response_code(404);
         exit('Data mahasiswa tidak ditemukan.');
    }

    require __DIR__ . '/../views/mahasiswa/edit.php';
 }

 public function update(): void
 {
    $id = (int) ($_POST['id'] ?? 0);
    $data = $this->validateInput($_POST);
    $this->model->update($id, $data);
    header('Location: index.php?page=mahasiswa');
    exit;
 }

  public function delete(): void
  {
    $id = (int) ($_POST['id'] ?? 0);
    $this->model->delete($id);
    header('Location: index.php?page=mahasiswa');
    exit;
  }

  private function validateInput(array $input): array
  {
    $data = [
        'nim' => trim($input['nim'] ?? ''),
        'nama' => trim($input['nama'] ?? ''),
        'prodi' => trim($input['prodi'] ?? '')
    ];

    if ($data['nim'] === '' || $data['nama'] === '' || $data['prodi'] === '') {
        exit('NIM, nama, dan program studi wajib diisi.');
    }
    
    return $data;
  }
}
/
?>
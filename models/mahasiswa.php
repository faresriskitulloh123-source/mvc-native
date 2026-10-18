<?php
class Mahasiswa
{
    public function __construct(private PDO $db) {}
    
    public function getAll(): array
 {
    $stmt = $this->db->query(
        'SELECT id, nim, nama, prodi FROM mahasiswa ORDER BY nama'
         );
         return $stmt->fetchAll();
 }
 public function findById(int $id): array|false
 {
    $stmt = $this->db->prepare(
        'SELECT id, nim, nama, prodi FROM mahasiswa WHERE id = :id'
    );
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
 }

 public function insert(array $data): bool
 {
    $sql = 'INSERT INTO mahasiswa (nim, nama, prodi)
            VALUES (:nim, :nama, :prodi)';
    $stmt = $this->db->prepare($sql);
    return $stmt->execute([
        ':nim' => $data['nim'],
        ':nama' => $data['nama'],
        ':prodi' => $data['prodi']
    ]);
 }

 public function update(int $id, array $data): bool
 {
    $sql = 'UPDATE mahasiswa
            SET nim = :nim, nama = :nama, prodi = :prodi
            WHERE id = :id';
    $stmt = $this->db->prepare($sql);
    return $stmt->execute([
        ':id' => $id,
        ':nim' => $data['nim'],
        ':nama' => $data['nama'],
        ':prodi' => $data['prodi']
    ]);
 }

 public function delete(int $id): bool
 {
    
 $stmt = $this->db->prepare(
    'DELETE FROM mahasiswa WHERE id = :id'
    );
 }
}
?>
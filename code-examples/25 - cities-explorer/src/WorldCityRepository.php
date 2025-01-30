<?php

class WorldCityRepository {
  private PDO $pdo;

  public function __construct (PDO $pdo){
    $this->pdo=$pdo;
  }

  private function arrayToModel (array $entry): WorldCityModel{
    return new WorldCityModel(
      $entry['id'],
      $entry['city'],
      $entry['city_ascii'],
      $entry['lat'],
      $entry['lng'],
      $entry['country'],
      $entry['iso2'],
      $entry['iso3'],
      $entry['admin_name'],
      $entry['capital'],
      $entry['population']
    );                    
  }

  public function fetch(): array {
    $stmt = $this->pdo->prepare('SELECT * FROM worldcities ORDER BY population DESC LIMIT 10');
    $stmt->execute();
    $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $models = [];
    foreach ($entries AS $entry){
      $models[] = $this->arrayToModel($entry);                  
    }
    return $models;
  }

  public function fetchById(int $id): ?WorldCityModel {
    $stmt = $this->pdo->prepare('SELECT * FROM worldcities WHERE id = :id');
    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    $entry = $stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($entry)) return null;

    return $this->arrayToModel($entry);
  }

  public function count(): int {
    $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM worldcities');
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_COLUMN);
  }

  public function paginate(int $numPage, int $perPage): array {
    if ($numPage < 1 || $perPage <= 0) return [];

    $stmt = $this->pdo->prepare('SELECT * FROM worldcities ORDER BY population DESC LIMIT :perPage OFFSET :offset');
    $stmt->bindValue(':perPage',$perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset',($numPage - 1)*$perPage, PDO::PARAM_INT);
    $stmt->execute();
    $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $models = [];
    foreach ($entries AS $entry){
      $models[] = $this->arrayToModel($entry);                  
    }
    return $models;
  }

  public function update(int $id, array $params): void {
    $stmt = $this->pdo->prepare(
     'UPDATE worldcities
      SET city = :city,
          city_ascii = :cityAscii,
          country = :country,
          iso2 = :iso2,
          population = :population
      WHERE id = :id
    ');

    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':city',$params['city']);
    $stmt->bindValue(':cityAscii',$params['cityAscii']);
    $stmt->bindValue(':country',$params['country']);
    $stmt->bindValue(':iso2',$params['iso2']);
    $stmt->bindValue(':population',$params['population']);
    $stmt->execute();
  }
}
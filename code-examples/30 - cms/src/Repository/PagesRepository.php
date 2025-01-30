<?php

namespace App\Repository;

use App\Model\PageModel;
use PDO;

class PagesRepository {

  public function __construct (private PDO $pdo){}

  public function get(): array{
    $stmt = $this->pdo->prepare('SELECT * FROM pages ORDER BY id ASC');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS,PageModel::class);
  }

  public function fetchForNavigation(): array{
    return $this->get();
  }

  public function fetchBySlug (string $slug): PageModel|false{
    $stmt = $this->pdo->prepare('SELECT * FROM pages WHERE slug = :slug');
    $stmt->bindValue(':slug',$slug,PDO::PARAM_STR);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS,PageModel::class);
    return $stmt->fetch();
  }

  public function getSlugExists(string $slug): bool{
    $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM pages WHERE slug = :slug');
    $stmt->bindValue(':slug',$slug,PDO::PARAM_STR);
    $stmt->execute();
    return ($stmt->fetch(PDO::FETCH_COLUMN) >= 1);
  }

  public function create(string $title, string $slug, string $content): bool {
    $stmt = $this->pdo->prepare('INSERT INTO pages (title,slug,content) VALUES (:title,:slug,:content)');
    $stmt->bindValue(':title',$title,PDO::PARAM_STR);
    $stmt->bindValue(':slug',$slug,PDO::PARAM_STR);
    $stmt->bindValue(':content',$content,PDO::PARAM_STR);
    return $stmt->execute();
  }

  public function update(int $id, string $title, string $content): bool {
    $stmt = $this->pdo->prepare('UPDATE pages SET title = :title, content = :content WHERE id = :id');
    $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    $stmt->bindValue(':title',$title,PDO::PARAM_STR);
    $stmt->bindValue(':content',$content,PDO::PARAM_STR);
    return $stmt->execute();
  }

  public function delete(int $id): bool {
    $stmt = $this->pdo->prepare('DELETE FROM pages WHERE `id` = :id');
    $stmt->bindValue(':id',$id, PDO::PARAM_INT);
    return $stmt->execute();
  }
}
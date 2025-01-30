<?php

function fetch_count_names_by_initial (string $letter): int {
  global $pdo;
  $stmt = $pdo->prepare('SELECT COUNT(DISTINCT name) FROM names WHERE name LIKE :likeExpr');
  $stmt->bindValue(':likeExpr',"{$letter}%",PDO::PARAM_STR);
  $stmt->execute();
  $numNames = $stmt->fetch(PDO::FETCH_COLUMN);
  return $numNames;
}

function fetch_names_by_initial (string $letter, int $page, int $perPage): array{
  global $pdo;
  $stmt = $pdo->prepare('SELECT DISTINCT name FROM names WHERE name LIKE :likeExpr ORDER BY name LIMIT :perPage OFFSET :offset');
  $stmt->bindValue(':likeExpr',"{$letter}%",PDO::PARAM_STR);
  $stmt->bindValue(':perPage',$perPage,PDO::PARAM_INT);
  $stmt->bindValue(':offset', ($page-1)*$perPage,PDO::PARAM_INT);
  $stmt->execute();
  $names = $stmt->fetchAll(PDO::FETCH_COLUMN);
  return $names;
}

function fetch_entries_by_name (string $name): array{
  global $pdo;
  $stmt = $pdo->prepare('SELECT year,count FROM names WHERE name = :name ORDER BY year');
  $stmt->bindValue(':name',$name,PDO::PARAM_STR);
  $stmt->execute();
  $nameEntries = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $nameEntries;
}

function fetch_top_entries (): array {
  global $pdo;
  $stmt = $pdo->prepare('SELECT name,SUM(count) total_count FROM names GROUP BY name ORDER BY total_count DESC LIMIT 10');
  $stmt->execute();
  $topEntries = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $topEntries;
}
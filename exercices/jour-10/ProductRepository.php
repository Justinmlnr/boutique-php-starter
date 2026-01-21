<?php

class ProductRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function find(int $id): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([
            'id' => $id
        ]);

        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        return $product ?: null;
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

<?php

// connexion pdo
$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8",
    "dev",
    "dev",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$productRepo = new ProductRepository($pdo);


class Product
{
    public function __construct(
        private ?int $id = null,
        private string $name = '',
        private float $price = 0,
        private int $stock = 0
    ) {}

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getPrice(): float { return $this->price; }
    public function getStock(): int { return $this->stock; }

    public function setPrice(float $price): void { $this->price = $price; }
}

// Repository
class ProductRepository
{
    public function __construct(private PDO $pdo) {} // repo reçoit pdo , responsable uniquement de la base de données 

    
    public function find(int $id): ?Product
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        return $data ? $this->hydrate($data) : null;
    }

    // READ ALL
    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return array_map([$this, 'hydrate'], $stmt->fetchAll());
    }

    // CREATE
    public function save(Product $product): void
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO products (name, price, stock) VALUES (?, ?, ?)"
        );

        $stmt->execute([
            $product->getName(),
            $product->getPrice(),
            $product->getStock()
        ]);
    }

    // UPDATE
    public function update(Product $product): void
    {
        $stmt = $this->pdo->prepare(
            "UPDATE products SET name = ?, price = ?, stock = ? WHERE id = ?"
        );

        $stmt->execute([
            $product->getName(),
            $product->getPrice(),
            $product->getStock(),
            $product->getId()
        ]);
    }

    // DELETE
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }

    // HYDRATE
    private function hydrate(array $data): Product
    {
        return new Product(
            id: (int) $data['id'],
            name: $data['name'],
            price: (float) $data['price'],
            stock: (int) $data['stock']
        );
    }
}

// ---------------- TEST ----------------

// Tous
$products = $productRepo->findAll();

// Un seul
$product = $productRepo->find(8);

// Create
$newProduct = new Product(name: "Casquette", price: 19.99, stock: 100);
$productRepo->save($newProduct);

// Update
if ($product) {
    $product->setPrice(24.99);
    $productRepo->update($product);
}

// Delete
$productRepo->delete(35);

// var_dump ($products);
var_dump($product);
<?php

function calculateIncludingTax(): float
{
    $priceExcludingTax = 100;
    $vat = 20;
    return $priceExcludingTax * (1 + $vat / 100);
}

function calculateDiscount(): float
{
    $price = 120;
    $percentage = 10;
    return $price - ($price * $percentage / 100);
}

function calculateTotal(): float
{
    $cart = [100, 50, 25.5];
    return array_sum($cart);
}

function formatPrice(float $amount): string
{
    return number_format($amount, 2, ',', ' ') . ' €';
}

function formatDate(string $date): string
{
    $timestamp = strtotime($date);
    return date('d/m/Y', $timestamp);
}

function displayStockStatus(int $stock): string
{
    if ($stock <= 0) {
        return '<span style="color:red; font-weight:bold;">Rupture de stock</span>';
    }

    if ($stock < 5) {
        return '<span style="color:orange;">Stock faible (' . $stock . ' restants)</span>';
    }

    return '<span style="color:green;">En stock (' . $stock . ')</span>';
}

function displayBadges(array $product): string
{
    $badges = "";

    // Badge nouveau
    if (!empty($product["new"]) && $product["new"] === true) {
        $badges .= '<span style="background: blue; color: white; padding: 4px 7px; border-radius: 5px; margin-right:5px;">NOUVEAU</span>';
    }

    // Badge promo
    if (!empty($product["discount"]) && $product["discount"] > 0) {
        $badges .= '<span style="background: red; color: white; padding: 4px 7px; border-radius: 5px; margin-right:5px;">PROMO -' . $product["discount"] . '%</span>';
    }

    // Badge derniers
    if (!empty($product["stock"]) && $product["stock"] > 0 && $product["stock"] < 5) {
        $badges .= '<span style="background: orange; color: white; padding: 4px 7px; border-radius: 5px;">DERNIERS</span>';
    }

    return $badges;
}

function validateEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validatePrice(mixed $price): bool
{
    if (!is_numeric($price)) {
        return false;
    }

    return $price >= 0;
}

function dump_and_die(...$vars): void
{
    echo '<pre style="background:#000;color:#4ec9b0;padding:15px;border-radius:5px;">';

    foreach ($vars as $var) {

        echo "Type: " . gettype($var) . "\n";

        if (is_string($var)) {
            echo "Length: " . strlen($var) . "\n";
        }

        if (is_array($var)) {
            echo "Length: " . count($var) . "\n";
        }

        echo "Value:\n";
        var_dump($var);

        echo "\n-----------------\n\n";
    }

    echo '</pre>';

    die();
}

<?php
// fonctions utilitaires

function displayBadge($product) {
    if ($product['new']) return '<span class="badge" style="background: blue; color:white; padding:3px 6px; border-radius:4px;">NOUVEAU</span>';
    if ($product['discount'] > 0) return '<span class="badge" style="background: red; color:white; padding:3px 6px; border-radius:4px;">PROMO -' . $product['discount'] . '%</span>';
    if ($product['stock'] < 5 && $product['stock'] > 0) return '<span class="badge" style="background: orange; color:white; padding:3px 6px; border-radius:4px;">DERNIERS</span>';
    return '';
}

function displayPrice($product) {
    $price = $product['price'];
    if ($product['discount'] > 0) {
        $discountedPrice = $price - ($price * $product['discount'] / 100);
        return '<span style="text-decoration: line-through;">' . number_format($price, 2) . ' €</span> ' .
               '<span style="color:red;font-weight:bold;">' . number_format($discountedPrice, 2) . ' €</span>';
    }
    return number_format($price, 2) . ' €';
}

function displayStock($product) {
    if ($product['stock'] <= 0) return '<span style="color:red">Rupture</span>';
    if ($product['stock'] < 5) return '<span style="color: orange;">Stock faible (' . $product['stock'] . ')</span>';
    return '<span style="color:green">En stock (' . $product['stock'] . ')</span>';
}

function displayButton($product) {
    if ($product['stock'] > 0) return '<button>Ajouter au panier</button>';
    return '<button disabled>Ajouter au panier</button>';
}
?>
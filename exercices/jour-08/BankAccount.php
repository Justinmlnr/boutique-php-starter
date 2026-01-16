<?php

class User
{
    private $balance;

    public function __construct($balance=0)
    {
        if ($balance < 0) {
            $balance = 0;
        }
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount <= 0) {
            echo"montant du dépôt invalide: $amount<br>";
            return;
    }
        $this->balance -= $amount;
        echo "deposited $amount sur le compte. new balance: $this->balance<br>";
    }

    public function withdraw($amount)
{
    if ($amount <= 0) {
        echo "Montant du retrait invalide: $amount<br>";
        return;
    }
    if ($this->balance >= $amount) {
        $this->balance -= $amount;
        echo "Withdraw $amount from account. New balance: $this->balance<br>";
    } else {
        echo "Insufficient balance. Current balance: $this->balance<br>";
    }
}
}

$user = new User(350);
$user->deposit(50);   // 150
$user->withdraw(30);  // 120
$user->withdraw(200); // Insufficient

?>
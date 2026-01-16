<?php

class User
{
    public string $name;
    public string $email;
    public DateTime $registrationDate;

    public function __construct(string $name, string $email, DateTime $registrationDate)
    {
        $this->name = $name;
        $this->email = $email;
        $this->registrationDate = $registrationDate ?? new DateTime();
    }

    public function isNewMember(): bool
    {
        $now = new DateTime();
        $interval = $now->diff($this->registrationDate);
        return $interval->days < 30;
    }
}

$user1 = new User("Tom", "azerty@mail.com", new Datetime("10-01-2026"));

var_dump($user1->isNewMember());

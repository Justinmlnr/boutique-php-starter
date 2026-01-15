<?php 

Class User 
{
    public string $name;
    public string $email;
    public string $registrationDate;

    public function __construct(string $name, string $email, string $registrationDate)
    {
        $this->name = $name;
        $this->email = $email;
        $this->registrationDate = $registrationDate;
    }

    public function display(): void
    {

        echo "{$this->name} {$this->email} ({$this->registrationDate})\n";
    }
}


?>
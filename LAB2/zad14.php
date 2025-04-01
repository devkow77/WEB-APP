<?php
require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

class Dog {
    private string $id;
    private string $name;
    private int $age;
    private string $admissionDate;

    // Konstruktor
    public function __construct(string $name, int $age, string $admissionDate) {
        $this->id = Uuid::uuid4()->toString();
        $this->name = $name;
        $this->age = $age;
        $this->admissionDate = $admissionDate;
    }

    // Metoda do wypisania informacji o psie
    public function __toString(): string {
        return "{$this->name} ({$this->age} l.) przyjęty w dn. {$this->admissionDate}";
    }

    // Gettery dla testów lub dalszego rozszerzania funkcjonalności
    public function getId(): string {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getAdmissionDate(): string {
        return $this->admissionDate;
    }
}

// Tworzenie przykładowych psów
$dogs = [
    new Dog("Burek", 9, "10-03-2025"),
    new Dog("Clifford", 9, "05-02-2025"),
    new Dog("Azor", 12, "15-02-2025"),
    new Dog("Szarik", 8, "22-02-2025"),
    new Dog("Idefix", 15, "26-01-2025"),
];

// Wyświetlanie informacji o każdym psie
foreach ($dogs as $dog) {
    echo $dog . "\n";
}
?>

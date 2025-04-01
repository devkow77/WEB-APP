<?php
class Point {
    private float $x;
    private float $y;

    // Konstruktor
    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Metoda do wypisania informacji o punkcie
    public function __toString(): string {
        return "Point({$this->x}, {$this->y})";
    }

    // Settery
    public function setX(float $x): void {
        $this->x = $x;
    }

    public function setY(float $y): void {
        $this->y = $y;
    }

    // Gettery
    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    // Przesunięcie punktu o podany dystans
    public function move(float $dx, float $dy): void {
        $this->x += $dx;
        $this->y += $dy;
    }
}

// Testowanie klasy
$point1 = new Point(2.5, 3.5);
echo $point1 . "\n";

// Aktualizacja współrzędnych
$point1->setX(5.0);
$point1->setY(7.0);
echo "Po aktualizacji: " . $point1 . "\n";

// Przesunięcie punktu
$point1->move(1.5, -2.0);
echo "Po przesunięciu: " . $point1 . "\n";

// Utworzenie kolejnego punktu
$point2 = new Point(-3.0, 4.0);
echo $point2 . "\n";

$point2->move(2.0, 3.0);
echo "Po przesunięciu punktu 2: " . $point2 . "\n";
?>

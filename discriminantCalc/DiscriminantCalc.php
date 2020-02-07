<?php

namespace devswb\hometask2\discriminantCalc; //прапка где лежит класс и указываем его уникальное имя

class DiscriminantCalc
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function discriminant(): int
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    public function Result(): void
    {
        echo "D=b2-4ac <br>" . "Result: " . $this->discriminant();
    }
}
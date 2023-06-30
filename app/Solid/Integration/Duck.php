<?php

namespace App\Solid\Integration;

class Duck implements Speakable, Walkable, Flyable
{
    public function walk()
    {
        return "How to walk";
    }
    public function fly()
    {
        return "How to walk";
    }

    public function speak()
    {
        return "How to walk";
    }
}

?>
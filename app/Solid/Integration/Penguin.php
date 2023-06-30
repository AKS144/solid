<?php

namespace App\Solid\Integration;

class Penguin implements Speakable, Walkable
{
    public function speak()
    {
        return "How to walk";
    }

    public function walk()
    {
        return "How to walk";
    }
}

?>
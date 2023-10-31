<?php

declare(strict_types=1);

namespace Framework;

class App
{
    public function run()
    {
        echo "Application is running";
    }

    public function add(string $path)
    {
        $this->router->add($path);
    }
}

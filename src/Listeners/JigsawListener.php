<?php
declare(strict_types=1);

namespace App\Listeners;


use TightenCo\Jigsaw\Jigsaw;

interface JigsawListener
{
    public function handle(Jigsaw $jigsaw): void;
}

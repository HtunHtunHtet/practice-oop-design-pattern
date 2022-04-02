<?php

namespace Domain;

use Domain\Interfaces\BookInterface;

class PaperBook implements BookInterface
{
    private int $page;

    public function turnPage(): void
    {
       ++$this->page;
    }

    public function open(): void
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}

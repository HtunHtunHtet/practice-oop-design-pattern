<?php

namespace Domain;

use Domain\Interfaces\EbookInterface;

class Kindle implements EbookInterface
{
    private int $page = 1;
    private int $totalPages = 100;

    public function unlock(): void
    {
    }

    public function pressNext(): int
    {
        return $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}

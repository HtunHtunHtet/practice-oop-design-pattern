<?php

namespace Adapter;

use Domain\Interfaces\BookInterface;
use Domain\Interfaces\EbookInterface;

class EbookAdapter implements BookInterface
{
    public function __construct(protected EbookInterface $ebook)
    {

    }

    public function turnPage(): void
    {
        $this->ebook->pressNext();
    }

    public function open(): void
    {
        $this->ebook->unlock();
    }

    public function getPage(): int
    {
       return $this->ebook->getPage()[0];
    }
}

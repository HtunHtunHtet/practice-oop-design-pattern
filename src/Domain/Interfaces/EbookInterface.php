<?php

namespace Domain\Interfaces;

interface EbookInterface
{
    public function unlock(): void;

    public function pressNext(): int;

    /**
     * @return int[]
     */
    public function getPage(): array;

}

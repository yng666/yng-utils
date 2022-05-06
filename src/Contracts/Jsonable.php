<?php
declare(strict_types=1);

namespace Yng\Utils\Contracts;

interface Jsonable
{
    public function __toString(): string;
}

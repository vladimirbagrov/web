<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Интерфейс SuperUserInterface
 */
interface SuperUserInterface
{
    /**
     * Получить информацию в виде массива
     */
    public function getInfo(): array;
}

<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Абстрактный пользователь
 */
abstract class AbstractUser
{
    /**
     * Показать информацию о пользователе
     */
    abstract public function showInfo(): void;
}

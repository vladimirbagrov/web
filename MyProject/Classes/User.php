<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Класс User представляет обычного пользователя
 */
class User extends AbstractUser
{
    public string $name;
    public string $login;
    private string $password;
    public static int $count = 0;

    /**
     * Конструктор класса User
     */
    public function __construct(string $name, string $login, string $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        
        if (get_class($this) === self::class) {
        self::$count++;
        }
    }

    /**
     * Деструктор класса User
     */
    public function __destruct()
    {
        echo "Пользователь {$this->login} удален.<br>";
    }

    /**
     * Показать информацию о пользователе
     */
    public function showInfo(): void
    {
        echo "Имя: {$this->name}, Логин: {$this->login}<br>";
    }
}

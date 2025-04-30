<?php
declare(strict_types=1);

namespace MyProject\Classes;

require_once 'User.php';

/**
 * Класс SuperUser представляет суперпользователя
 */
class SuperUser extends User implements SuperUserInterface
{
    public string $role;
    public static int $count = 0;

    /**
     * Конструктор класса SuperUser
     */
    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        self::$count++;
    }

    /**
     * Показать информацию о суперпользователе
     */
    public function showInfo(): void
    {
        parent::showInfo();
        echo "Роль: {$this->role}<br>";
    }

    /**
     * Получить информацию в виде массива
     */
    public function getInfo(): array
    {
        return [
            'name' => $this->name,
            'login' => $this->login,
            'role' => $this->role
        ];
    }
}

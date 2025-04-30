<?php

require_once 'Settings.php';

$settings = Settings::getInstance();

// Сохранение числовых, строковых и логических значений
$settings->set('maxUsers', 333);  
$settings->set('appName', 'Строка');  
$settings->set('debugMode', true);  

// Отображение сохраненных значений
echo "Числовое значение (maxUsers): " . $settings->get('maxUsers') . "\n";
echo "Строковое значение (appName): " . $settings->get('appName') . "\n";
echo "Логическое значение (debugMode): " . ($settings->get('debugMode') ? 'true' : 'false') . "\n";

// Продемонстрируйте, что мы получаем один и тот же экземпляр
$settings2 = Settings::getInstance();
echo "\nПроверяем, получим ли мы один и тот же экземпляр:\n";
echo "Настройки 2 Имя приложения: " . $settings2->get('appName') . "\n";

// If we change a value in the second instance, it affects the first one too
$settings2->set('appName', 'Updated App Name');
echo "Обновлено AppName в settings2, теперь в settings1: " . $settings->get('appName') . "\n"; 
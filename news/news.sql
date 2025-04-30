
-- Создание таблицы новостей
CREATE TABLE msgs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    category INTEGER NOT NULL,
    description TEXT NOT NULL,
    source TEXT NOT NULL,
    datetime INTEGER NOT NULL
);

-- Создание таблицы категорий
CREATE TABLE category (
    id INTEGER PRIMARY KEY,
    name TEXT NOT NULL
);

-- Заполнение таблицы категорий
INSERT INTO category(id, name) VALUES (1, 'Политика');
INSERT INTO category(id, name) VALUES (2, 'Культура');
INSERT INTO category(id, name) VALUES (3, 'Спорт');

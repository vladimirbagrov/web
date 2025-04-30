
-- Таблица категорий
CREATE TABLE IF NOT EXISTS category (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL
);

-- Таблица новостей
CREATE TABLE IF NOT EXISTS msgs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT,
    category INTEGER,
    description TEXT,
    source TEXT,
    datetime INTEGER
);

-- Добавление стандартных категорий
INSERT INTO category (name) VALUES
('Политика'),
('Культура'),
('Спорт');

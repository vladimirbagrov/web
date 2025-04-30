<?php
require_once "INewsDB.class.php";

class NewsDB implements INewsDB {
    const DB_NAME = "news.db";
    protected $_db;

    function __construct() {
        if (!file_exists(self::DB_NAME)) {
            $this->_db = new SQLite3(self::DB_NAME);
            $sql = file_get_contents("news.sql");

            // Разбиваем SQL-файл на отдельные запросы
            $queries = explode(";", $sql);
            foreach ($queries as $query) {
                $query = trim($query);
                if (!empty($query)) {
                    $this->_db->exec($query);
                }
            }
        } else {
            $this->_db = new SQLite3(self::DB_NAME);
        }
    }

    function __destruct() {
        unset($this->_db);
    }

    public function saveNews($title, $category, $description, $source) {
        $dt = time();
        $title = SQLite3::escapeString($title);
        $description = SQLite3::escapeString($description);
        $source = SQLite3::escapeString($source);

        $sql = "INSERT INTO msgs (title, category, description, source, datetime)
                VALUES ('$title', $category, '$description', '$source', $dt)";
        
        $result = $this->_db->exec($sql);

        // Отладка — если вдруг ошибка
        if (!$result) {
            echo "<pre>Ошибка SQLite: " . $this->_db->lastErrorMsg() . "</pre>";
        }

        return $result;
    }

    public function getNews() {
        $sql = "SELECT msgs.id AS id, title, category.name AS category, description, source, datetime
                FROM msgs, category WHERE category.id = msgs.category
                ORDER BY msgs.id DESC";
        $result = $this->_db->query($sql);
        $arr = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $arr[] = $row;
        }
        return $arr;
    }

    public function deleteNews($id) {
        $sql = "DELETE FROM msgs WHERE id = $id";
        return $this->_db->exec($sql);
    }
}
?>

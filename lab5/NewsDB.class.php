<?php
class NewsDB implements IteratorAggregate {
    const DB_NAME = "news.db";
    protected SQLite3 $_db;
    private array $items = [];

    public function __construct() {
    if (!file_exists(self::DB_NAME)) {
        $this->_db = new SQLite3(self::DB_NAME);
        $sql = file_get_contents("news.sql");
        $queries = explode(";", $sql);
        foreach ($queries as $query) {
            $query = trim($query);
            if ($query) $this->_db->exec($query);
        }
    } else {
        $this->_db = new SQLite3(self::DB_NAME);
    }
    $this->getCategories();
}

    public function getNews() {
    $sql = "SELECT msgs.id AS id, title, msgs.category AS category_id, category.name AS category, description, source, datetime
            FROM msgs
            JOIN category ON category.id = msgs.category
            ORDER BY msgs.id DESC";
    $result = $this->_db->query($sql);
    $arr = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $arr[] = $row;
    }
    return $arr;
}

    public function saveNews($title, $category, $description, $source) {
    $dt = time();
    $title = SQLite3::escapeString($title);
    $description = SQLite3::escapeString($description);
    $source = SQLite3::escapeString($source);
    $sql = "INSERT INTO msgs (title, category, description, source, datetime)
            VALUES ('$title', $category, '$description', '$source', $dt)";
    return $this->_db->exec($sql);
}

    private function getCategories(): void {
        $sql = "SELECT id, name FROM category";
        $res = $this->_db->query($sql);
        while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
            $this->items[$row['id']] = $row['name'];
        }
    }

    public function getIterator(): Traversable {
        return new ArrayIterator($this->items);
    }

    public function deleteNews($id) {
    $id = (int)$id;
    $sql = "DELETE FROM msgs WHERE id = $id";
    return $this->_db->exec($sql);
}
}
?>

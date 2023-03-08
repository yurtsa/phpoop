<?php

class NewsDB implements INewsDB
{
    const DB_NAME = 'news.db';
    public $_db;

    public function __construct()
    {
        $this->_db = new SQLite3(self::DB_NAME);
        if (file_exists(self::DB_NAME) && filesize(self::DB_NAME) == 0) {
            $sql = "CREATE TABLE msgs(id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, category INTEGER, description TEXT, source TEXT, datetime INTEGER); ";
            $sql .= "CREATE TABLE category(id INTEGER, name TEXT); ";
            $sql .= "INSERT INTO category(id, name) SELECT 1 as id, 'Политика' as name UNION SELECT 2 as id, 'Культура' as name UNION SELECT 3 as id, 'Спорт' as name";
            $this->_db->exec($sql) or die($this->_db->lastErrorMsg());
        }
    }

    public function __destruct()
    {
        $this->_db->close();
        unset($this->_db);
    }

    public function __get($name)
    {
        if ($name == '_db')
            return $this->_db;
        throw new Exception('Unknown property!');
    }

    public function deleteNews($id)
    {
        // TODO: Implement deleteNews() method.
    }

    public function getNews()
    {
        // TODO: Implement getNews() method.
    }

    public function saveNews($title, $category, $description, $source)
    {
        $sql='INSERT INTO msgs (title, category, description, source)
              VALUES (:title, :category, :description, :source)';

        $this->_db->bindValue(':title', $title);
        $this->_db->bindValue(':category', $category);
        $this->_db->bindValue(':description', $description);
        $this->_db->bindValue(':source', $source);
        $this->_db->prepare($sql);
        return $this->_db->execute();
        // TODO: Implement saveNews() method.
    }
}
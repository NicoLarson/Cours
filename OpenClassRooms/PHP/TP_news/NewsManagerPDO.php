<?php

public NewsManagerPDO extends NewsManager
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function add(New $news)
    {
        $request = $this->db->prepare('INSERT INTO news(auteur, titre, contenu, dateAjout, dateModif) VALUES(:author, :title, :content, NOW(), NOW())');

        $request->bindValue(':title', $news->title());
        $request->bindValue(':author', $author->author());
        $request->bindValue(':content', $content->content());

        $request->execute();
    }

    public function count()
    {
        return $this->db->query('SELECT COUNT(*) FROM news')->fetchColumn();
    }

    public function delete($id)
    {
        $this->db->execute('DELETE FROM news WHERE id = '.(int) $id);
    }

    
}

<?php

abstract class NewsManager
{
    // Ajouter une news
    abstract protected function add(News $news);

    // Total des news
    abstract public function count();

    // Supprimer une news
    abstract public function delete($id);

    // Retourne une liste de news demandé
    abstract public function getList($start = -1, $limit = -1);

    // Retourne une news precis
    abstract public function getUnique($id);

    // Enrengistrer une news
    public function save(News $news)
    {
        if ($news->isValid()) {
            $news->isNew() ? $this->add($news) : $this->update($news);
        } else {
            throw new RuntimeException('La new doit être valide pour être enrengistrée');
        }
    }
    // Modifier une news
    abstract protected function update(News $news);
}

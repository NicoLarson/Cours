<?php

class News
{
    protected $errors = [],
        $id,
        $author,
        $title,
        $content,
        $addDate,
        $updateDate;

    // Possible erreurs
    const INVALID_AUTHOR = 1, INVALID_TITLE = 2, INVALID_CONTENT = 3;

    public function __construct($values = [])
    {
        if (!empty($values)) {
            $this->hydrate($values);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $attribut => $value) {
            $method = 'set' . ucfirst($attribut);
            if (is_callable([$this, $method])) {
                $this->$method($value);
            }
        }
    }

    // Savoir si la news est nouvelle
    public function isNew()
    {
        return empty($this->id);
    }

    // Si la new est valide 
    public function isValid()
    {
        return !(empty($this->author) || empty($this->title) || empty($this->content));
    }

    // SETTERS
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    public function setAuthor($author)
    {
        if (!is_string($author) || empty($author)) {
            $this->errors[] = self::INVALID_AUTHOR;
        } else {
            $this->author = $author;
        }
    }

    public function setTitle($title)
    {
        if (!is_string($title) || empty($title)) {
            $this->errors[] = self::INVALID_TITLE;
        } else {
            $this->title = $title;
        }
    }



    public function setContent($content)
    {
        if (!is_string($content) || empty($content)) {
            $this->errors[] = self::INVALID_CONTENT;
        } else {
            $this->content = $content;
        }
    }

    public function setAddDate(DateTime $addDate)
    {
        $this->addDate = $addDate;
    }

    public function setUpdateDate(DateTime $updateDate)
    {
        $this->updatedDate = $updateDate;
    }
    // GETTERS
    public function getErrors()
    {
        return $this->errors;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAddDate()
    {
        return $this->addDate;
    }

    public function getUpdateDate()
    {
        return $this->updateDate;
    }
}

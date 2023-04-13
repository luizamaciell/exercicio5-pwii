<?php
class Project
{
    private $title;
    private $summary;
    private $text;
    private $area;
    private $author;
    private $reviewer;


public function __construct( $title = null, $summary = null, $text = null, $area = null, $author = null, $reviewer = null)
{
    $this->title = $title;
    $this->summary = $summary;
    $this->text = $text;
    $this->area = $area;
    $this->author = $author;
    $this->reviewer = $reviewer;
}

public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }
    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
    public function getArea()
    {
        return $this->Document;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getReviewer()
    {
        return $this->reviewer;
    }

    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;
    } 
}
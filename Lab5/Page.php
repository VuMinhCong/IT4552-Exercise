<?php
class Page
{
    private $page, $title, $year, $copyright;

    public function __construct($title, $year, $copyright)
    {
        $this->page = '';
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
        $this->addHeader();
    }

    private function addHeader()
    {
        $this->page .= "<h1 align='center'>{$this->title}</h1>";
    }

    public function addContent($content)
    {
        $this->page .= $content;
    }

    private function addFooter()
    {
        $this->page .= "<p align='center'>This page was created in {$this->year} $this->copyright.</p>";
    }

    public function get()
    {
        $this->addFooter();
        return $this->page;
    }
}

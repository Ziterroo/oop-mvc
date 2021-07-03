<?php


namespace App;


class View implements \Countable
{
    protected array $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function addData(string $key, array $data)
    {
        $this->data[$key] = $data;
    }

    public function view(string $template)
    {
        require $_SERVER['DOCUMENT_ROOT'] . $template;
    }

    public function render(string $template)
    {
        ob_start();
        require $_SERVER['DOCUMENT_ROOT'] . $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function count()
    {
        return $this->data;
    }
}
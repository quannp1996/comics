<?php 
namespace App\Containers\AppSection\Base\Libraries;

class TitleGender
{
    protected string $title;

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
?>
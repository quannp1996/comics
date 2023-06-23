<?php 
namespace App\Containers\AppSection\Base\Libraries;

class BreadCrumbGender
{
    protected array $lists;
    protected string $title;

    public function __construct()
    {
        $this->lists = [];
        $this->title = '';
    }

    public function addList(array $item): self
    {
        $this->lists[] = $item;
        return $this;
    }

    public function setList(array $item) : self 
    {
        $this->lists = $item;
        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getList(): array
    {
        return $this->lists;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
?>
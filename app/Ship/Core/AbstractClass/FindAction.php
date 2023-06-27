<?php

namespace App\Ship\Core\AbstractClass;

use App\Ship\Parents\Actions\Action;


abstract class FindAction extends Action
{
    protected FindTask $task;
    protected array $withData;
    protected array $withCount;

    public function __construct(FindTask $task)
    {
        $this->task = $task;
        $this->withCount = [];
        $this->withData = [];
    }

    public function run(int $id)
    {
        return $this->task->withCount($this->withCount)->withData($this->withData)->run($id);
    }

    public function setWithData(array $withData): self
    {
        $this->withData = $withData;
        return $this;
    }

    public function setWithCount($withCount): self
    {
        $this->withCount = $withCount;
        return $this;
    }
}

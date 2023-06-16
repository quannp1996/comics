<?php

namespace App\Ship\Core\AbstractClass;

use App\Ship\Parents\Actions\Action;


abstract class ListAction extends Action
{
    protected bool $skipCache;
    protected array $conditions;
    protected ListTask $task;

    public function __construct(ListTask $task)
    {
        $this->task = $task;
        $this->conditions = [];
        $this->skipCache = false;
    }

    public function run(bool $hasPagination = true, int $limit = 10)
    {
        $conditions = $this->conditions;
        return $this->remember(function () use ($hasPagination, $limit, $conditions) {
            return $this->task->buildConditions($conditions)->run($hasPagination, $limit);
        }, $this->skipCache);
    }

    public function setConditions(array $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function setSkipCache(bool $skipCache): self
    {
        $this->skipCache = $skipCache;
        return $this;
    }
}

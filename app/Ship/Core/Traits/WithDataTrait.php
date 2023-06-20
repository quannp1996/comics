<?php

namespace App\Ship\Core\Traits;

trait WithDataTrait
{
    public function withData(array $withData = []): self
    {
        if (!empty($withData)) $this->repository->with($withData);
        return $this;
    }

    public function withCount(array $withCount = []): self
    {
        if (!empty($withCount)) $this->repository->withCount($withCount);
        return $this;
    }
}

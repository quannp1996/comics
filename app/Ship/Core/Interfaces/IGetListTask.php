<?php 
namespace App\Ship\Core\Interfaces;

interface IGetListTask
{
    public function run(bool $hasPagination, int $limit): iterable;
    public function buildConditions(array $conditions): self;
    public function withData(array $withData): self;
    public function withCount(array $withCount): self;
}

<?php 
namespace App\Ship\Core\Interfaces;

interface IGetListTask
{
    public function run(bool $hasPagination, int $limit): iterable;
    public function buildConditions(array $conditions): self;
}
?>
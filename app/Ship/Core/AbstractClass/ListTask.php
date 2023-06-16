<?php 
namespace App\Ship\Core\AbstractClass;

use App\Ship\Core\Interfaces\IGetListTask;
use App\Ship\Criterias\ThisEqualThatCriteria;
use App\Ship\Parents\Repositories\Repository;
use App\Ship\Parents\Tasks\Task;

abstract class ListTask extends Task implements IGetListTask
{
    protected Repository $repository;
    protected array $equalFields = [];
    public function run(bool $hasPagination, int $limit): iterable
    {
        return collect([]);
    }

    public function buildConditions(array $conditions = []): IGetListTask
    {
        if(empty($this->equalFields)) return $this;
        foreach($this->equalFields AS $field){
            if(!empty($conditions[$field])){
                $this->repository->pushCriteria(new ThisEqualThatCriteria($field, $conditions[$field]));
            }
        }
        return $this;
    }
}

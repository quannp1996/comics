<?php 
namespace App\Ship\Core\AbstractClass;

use App\Ship\Parents\Actions\Action;


abstract class ListAction extends Action
{
    protected array $conditions = [];
    public function setConditions(array $conditions): self
    {
        return $this;
    } 
}

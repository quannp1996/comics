<?php

namespace App\Containers\AppSection\Categories\Tasks;

use App\Containers\AppSection\Categories\Data\Repositories\CategoriesDescriptionRepository;
use App\Containers\AppSection\Categories\Data\Repositories\CategoriesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Arr;

class SyncCategoriesDescriptionTask extends Task
{
    protected $repository;
    
    public function __construct(CategoriesDescriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(int $categoryID, array $data)
    {
        try {
            $data = array_map(function($item){
                return Arr::only([
                    'language_id', 'title', 'description', 'meta_keyword', 'meta_title', 'meta_description'
                ], $item);
            }, $data);
            $this->repository->where('category_id', $categoryID)->delete();
            $this->repository->insert($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}

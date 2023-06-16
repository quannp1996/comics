<?php

/**
 * @ Created by: VSCode
 * @ Author: Oops!Memory - OopsMemory.com
 * @ Create Time: 2021-08-01 00:30:59
 * @ Modified by: Oops!Memory - OopsMemory.com
 * @ Modified time: 2022-10-14 17:16:32
 * @ Description: Happy Coding!
 */

namespace App\Ship\core\Traits\HelpersTraits;

use Illuminate\Support\Facades\DB;

trait UpdateDynamicStatusTrait
{
    public function updateDynamicStatus(string $field,int $id, int $status,string $id_alias_field = '') :? bool
    {
        if (!empty($field) && $id > 0) {
            return $this->repository->getModel()->where($id_alias_field ? $id_alias_field : 'id', $id)->update([$field => $status]);
        }

        return false;
    }

    public function updateDynamicStatusMultiple(string $field,array $ids, int $status,string $id_alias_field = '') :? bool
    {
        if (!empty($field) && $ids > 0) {
            // dd($field,$ids,$status);
            // DB::enableQueryLog();
            return $this->repository->getModel()->whereIn($id_alias_field ? $id_alias_field : 'id', $ids)->update([$field => $status]);
            // dd(DB::getQueryLog());
        }

        return false;
    }
}

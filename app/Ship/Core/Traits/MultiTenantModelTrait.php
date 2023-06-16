<?php

/**
 * @ Created by: VSCode
 * @ Author: Oops!Memory - OopsMemory.com
 * @ Create Time: 2022-02-05 03:59:15
 * @ Modified by: Oops!Memory - OopsMemory.com
 * @ Modified time: 2022-02-05 04:04:55
 * @ Description: Happy Coding!
 */

namespace Apiato\Core\Traits;

use Illuminate\Database\Eloquent\Builder;

trait MultiTenantModelTrait {
    
    public static function bootMultiTenantModelTrait() {
         if(!app()->runningInConsole() && auth()->check()) {
             $isAdmin = auth()->user()->roles->contains(1);

             static::creating(function($model) use ($isAdmin) {
                 if($isAdmin) {
                     $model->created_by_id = auth()->id();
                 }
             });

             if(!$isAdmin) {
                 static::addGlobalScope('created_by_id',function(Builder $builder) {
                     $field = sprintf('%s%s', $builder->getQuery()->from, 'created_by_id');

                     $builder->where($field, auth()->id())->orWhereNull($field);
                 });
             }
         }
    }
}
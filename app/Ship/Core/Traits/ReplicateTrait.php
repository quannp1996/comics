<?php

/**
 * @ Created by: VSCode
 * @ Author: Oops!Memory - OopsMemory.com
 * @ Create Time: 2020-10-07 14:25:57
 * @ Modified by: Oops!Memory - OopsMemory.com
 * @ Modified time: 2021-01-31 18:01:20
 * @ Description: Happy Coding!
 */

namespace Apiato\Core\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

trait ReplicateTrait
{

    public function replicateEloquent(array $mainData = [], array $descData = [])
    {
        $newElquement = $this->replicate()->fill($mainData);
        foreach($mainData AS $key => $value){
            $newElquement->{$key} = $value;
        }
        $newElquement->save();
        $this->replicateAllDesc($newElquement->id, $descData);
        $this->replicateImages($newElquement->id);
        $this->replicateCategories($newElquement->id);
    }

    public function replicateEloquentV2(array $mainData = []): self
    {
        $newElquement = $this->replicate();
        foreach($mainData AS $key => $value){
            $newElquement->{$key} = $value;
        }
        $newElquement->save();
        if(!empty($this->replicates)){
            foreach($this->replicates AS $key => $value){
                if($this->{$value} instanceof Collection){
                    foreach($this->{$value} AS $item){
                        $model = $item->replicate();
                        $model->{$key} = $newElquement->id;
                        $model->save();
                    }
                }else{
                    $model = $this->{$value}->replicate();
                    $model->{$key} = $newElquement->id;
                    $model->save();
                }
                
            }
        }
        return $newElquement;
    }

    protected function replicateCategories(int $id)
    {
        if ($this->categoriesModel && $this->{$this->categoriesModel}) {
            foreach ($this->{$this->categoriesModel} as $desc) {
                $newDesc = $desc->replicate();
                $newDesc->product_id = $id;
                $newDesc->save();
            }
        }
    }

    protected function replicateAllDesc(int $id, array $descData = [])
    {
        if ($this->descModel && $this->{$this->descModel}) {
            foreach ($this->{$this->descModel} as $desc) {
                $newDesc = $desc->replicate();
                $newDesc->product_id = $id;
                $newDesc->save();
            }
        }
    }

    protected function replicateImages(int $id)
    {
        if ($this->imageModel && $this->{$this->imageModel}) {
            foreach ($this->{$this->imageModel} as $image) {
                $imageDesc = $image->replicate();
                $imageDesc->object_id = $id;
                $imageDesc->save();
            }
        }
    }

    /**
     * Xử lí sau
     */
    public function multileReplicateEloquent()
    {

    }
}

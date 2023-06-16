<?php

namespace Apiato\Core\Traits;

use App\Containers\BaseContainer\Enums\BaseEnum;
use App\Containers\Product\Models\ProductDesc;

/**
 * Class NextPreRecord.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
trait NextPreRecord
{
    public function next()
    {
        return $this->getModel()->where('id', '>', $this->id)->orderBy('id', 'ASC')->first();
    }

    public function previous()
    {
        return $this->getModel()->where('id', '<', $this->id)->orderBy('id', 'DESC')->first();
    }

    public function nextP()
    {
        return $this->getModel()
            ->select('products.*')
            ->join(ProductDesc::getTableName(),'products.id', '=','product_description.product_id')
            ->where('status', '!=', BaseEnum::DELETE)
            ->where('products.id', '>', $this->id)->orderBy('products.id', 'ASC')
            ->first();
    }

    public function previousP()
    {
        return $this->getModel()
            ->select('products.*')
            ->join(ProductDesc::getTableName(),'products.id', '=','product_description.product_id')
            ->where('status', '!=', BaseEnum::DELETE)
            ->where('products.id', '<', $this->id)
            ->orderBy('products.id', 'DESC')->first();
    }
}

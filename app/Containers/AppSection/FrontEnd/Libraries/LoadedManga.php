<?php 
namespace App\Containers\AppSection\FrontEnd\Libraries;

class LoadedManga
{
    protected array $loadedIDs;

    public function __construct()
    {
        $this->loadedIDs = [];
    }

    public function addID($ids)
    {
        if(is_array($ids)){
            $this->loadedIDs = array_merge($this->loadedIDs, $ids);
        }else{
            $this->loadedIDs[] = $ids;
        }
        $this->loadedIDs = array_unique($this->loadedIDs);
    }

    public function getLoadedIDs(): array
    {
        return $this->loadedIDs;
    }
}
?>
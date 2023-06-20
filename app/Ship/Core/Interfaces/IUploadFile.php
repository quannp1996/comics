<?php 
namespace App\Ship\Core\Interfaces;

use Illuminate\Http\UploadedFile;

interface IUploadFile
{
    public function upload();
    public function validate(string $extension): bool;
    public function setPath(string $path): self;
    public function setFile(UploadedFile $file): self;
}
?>
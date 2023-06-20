<?php

namespace App\Ship\Core\Libraries;

use App\Ship\Core\Interfaces\IUploadFile;
use Exception;
use Illuminate\Http\UploadedFile;

class UploadImageFile implements IUploadFile
{
    public string $path;
    public string $filename;
    public UploadedFile $file;
    public function __construct()
    {
        $this->path = public_path();
        $this->filename = $this->makeRandomName();
    }
    public function upload()
    {
        if (empty($this->file)) throw new Exception('Bạn phải tải ảnh lên');
        $extension = $this->file->getClientOriginalExtension();
        if (!$this->validate($extension)) throw new Exception('Định dạng tải lên không phải hình ảnh');
        $this->file->move($this->path, $this->filename . '.' . $extension);
        return $this->path . '/' . $this->filename . '.' . $extension;
    }

    public function validate(string $extension): bool
    {
        return true;
    }

    public function setPath(string $path): self
    {
        if (!is_dir($path)) mkdir($path);
        $this->path = $path;
        return $this;
    }
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    public function processIOSImage()
    {
    }

    protected function makeRandomName(): string
    {
        return strtotime(now());
    }

    public function setFile(UploadedFile $file): IUploadFile
    {
        $this->file = $file;
        return $this;
    }
}

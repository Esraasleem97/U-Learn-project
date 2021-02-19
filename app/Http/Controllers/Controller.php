<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param $folder
     * @param $file
     * @param null $path
     * @return string
     */
    public function UploadFiles($folder, $file, $path = null)
    {

        $file->store('/', $folder);

        if ($path != null) {
            return $path . '/' . $folder . '/' . $file->hashName();
        }
        return $folder . '/' . $file->hashName();
    }
}

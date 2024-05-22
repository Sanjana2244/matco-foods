<?php

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\File;

function uploadFile($file, $uploadPath, $oldFile = null, $fileNameToStore = null)
{
    $file_path = public_path($uploadPath.$oldFile);
    if($oldFile){
        deleteFile($oldFile);
    }

    if(!$fileNameToStore){
        $fileNameToStore = $file->hashName();
    }

    $completePath = public_path($uploadPath);
    $path = $file->move($completePath, $fileNameToStore);

    $file_in_db = new File([
        'path' => $uploadPath.$fileNameToStore
    ]);

    return $file_in_db;
}

function deleteFile($file)
{
    if($file){
        $file_path = $file->path;

        $exists = Storage::exists($file_path);
        if($exists){
            Storage::delete($file_path);
        }
        $file->delete();
    }
}

function avatars_path()
{
    return 'storage/user_avatars/';
}

function sliders_path($type)
{
    return 'storage/sliders/'.$type.'/';
}

function products_path()
{
    return 'storage/products/';
}

function informations_path()
{
    return 'storage/informations/';
}

function news_event_path()
{
    return 'storage/newsEvent/';
}
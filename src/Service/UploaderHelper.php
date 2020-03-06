<?php

namespace App\Service;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class UploaderHelper
{

    public function __construct(string $uploadsPath)
    {
        $this->uploadsPath = $uploadsPath;

    }


    public function uploadPostImage(UploadedFile $uploadedFile): string
    {

        $destination = $this->uploadsPath.'/post_image';

        $newFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $uploadedFile->move(
            $destination,
            $newFilename
        );

        return $newFilename;

    }

}
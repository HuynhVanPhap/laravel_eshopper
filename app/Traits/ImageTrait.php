<?php

namespace App\Traits;

use Image;

trait ImageTrait
{
    /**
     * Thực hiện được việc upload
     * Các tùy chỉnh có thể :
     * Path: Đường dẫn lưu ảnh
     * Width: Chiều dài ảnh
     * Height: Chiều rộng ảnh
     */
    public function uploadImage(
        $imageFile,
        $storePath,
        $config = [
            'width' => null,
            'weight' => null
        ]
    ) {
        try {
            $image = Image::make($imageFile->path());

            $image->resize($config['width'], $config['height'], function ($const) {
                $const->aspectRatio();
            })->save(storage_path('app/public/'.$storePath));

            return 1;
        } catch (\Exception $exception) {
            // dd($exception);
            return 0;
        }
    }
}

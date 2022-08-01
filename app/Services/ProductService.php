<?php

namespace App\Services;

use App\Services\BaseService;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;
use App\Traits\NumericTrait;
use Illuminate\Support\Str;

class ProductService extends BaseService
{
    use ImageTrait, NumericTrait;

    public function __construct() {}

    public function getDataStore(Request $request) {
        $data = $request->all([
            'name', 'slug', 'price', 'discount', 'status', 'stock', 'brand_id', 'category_id'
        ]);
        $data['code'] = $this->codeShuffle(4);
        $data['price'] = $this->formatBackEndCurrency($data['price']);

        $image = $request->file('upload_image');
        $fileName = $data['slug'].'-'.$this->codeShuffle(4).'.'.$image->extension();

        // try {
        //     $this->uploadImage(
        //         $image,
        //         'app'.config('global.image_path.products_small').'/'.$fileName,
        //         [
        //             'width' => config('global.image_size.product_small.width'),
        //             'height' => config('global.image_size.product_small.height'),
        //         ]
        //     );
        //     $this->uploadImage(
        //         $image,
        //         'app'.config('global.image_path.products_medium').'/'.$fileName,
        //         [
        //             'width' => config('global.image_size.product_medium.width'),
        //             'height' => config('global.image_size.product_medium.height'),
        //         ]
        //     );

        //     $data['image'] = $fileName;

        //     return $data;
        // } catch(\Exception $exception) {
        //     return [];
        // }

        $imageSmall = $this->uploadImage(
            $image,
            config('global.image_path.products_small').'/'.$fileName,
            [
                'width' => config('global.image_size.product_small.width'),
                'height' => config('global.image_size.product_small.height'),
            ]
        );
        $imageMedium = $this->uploadImage(
            $image,
            config('global.image_path.products_medium').'/'.$fileName,
            [
                'width' => config('global.image_size.product_medium.width'),
                'height' => config('global.image_size.product_medium.height'),
            ]
        );

        if (!$imageSmall || !$imageMedium) {
            return [];
        }

        $data['image'] = $fileName;

        return $data;
    }
}

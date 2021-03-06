<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function getListProduct(Request $request)
    {

        $url = $request->segment(2);
        //$url = preg_split('/(-)/i',$url);
        $slug = Category::where('c_slug',$url)->select('id')->pluck('id');
        $products = Product::where('pro_active', Product::STATUS_PUBLIC);
        $cateProduct = [];
        if ($slug)
        {
            $cateProduct = Category::find($slug[0]);
            SEOTools::setTitle('Sản phẩm');
            SEOTools::setDescription($cateProduct->c_description_seo);
            SEOTools::opengraph()->setUrl($request->url());
            SEOTools::setCanonical($request->url());
            SEOMeta::addKeyword([$cateProduct->c_name]);
            $products = $products->where('pro_category_id',$slug[0]);
            //dd($cateProduct);
        }
//        if($id = array_pop($url))
//        {
//            $cateProduct = Category::find($id);
//            $products = $products->where('pro_category_id',$id);
//            dd($products);
//
//        }
        if ($request->search_product)
        {
            $products= $products->where('pro_name','like','%'.$request->search_product.'%');
        }

        if ($request->price)
        {
            $price = $request->price;
            switch ($price)
            {
                case '1':
                    $products->where('pro_price','<',1000000);
                    break;
                case '2':
                    $products->whereBetween('pro_price',[1000000,5000000]);
                    break;
                case '3':
                    $products->whereBetween('pro_price',[5000000,9000000]);
                    break;
                case '4':
                    $products->whereBetween('pro_price',[9000000,15000000]);
                    break;
                case '5':
                    $products->whereBetween('pro_price',[15000000,20000000]);
                    break;
                case '6':
                    $products->where('pro_price','>',20000000);
                    break;

            }
        }
        if ($request->orderby)
        {
            $orderby =$request->orderby;
            switch ($orderby)
            {
                case 'new':
                    $products->orderBy('id','DESC');
                    break;
                case 'sale':
                    $products->orderBy('pro_sale','DESC');
                    break;
                case 'hot':
                    $products->orderBy('pro_pay','DESC');
                    break;
                case 'price_max':
                    $products->orderBy('pro_price','ASC');
                    break;
                case 'price_min':
                    $products->orderBy('pro_price','DESC');
                    break;
                default:
                    $products->orderBy('id','DESC');
            }
        }
        $products = $products->paginate(6);
//        $slidecate = Slide::where([
////            'sls_active' => Slide::SLS_ACTIVE,
//            'sls_banner_category' => Slide::SLS_BANNER_ACTIVE
//        ])->orderByDesc('id')->limit(1)->get();
        $viewData = [
            'products'           => $products,
            'cateProduct'       => $cateProduct,
            'query'             => $request->query(),
            //'slidecate'         => $slidecate,
        ];

        return view('product.index', $viewData);

    }
    public function getListSearchProduct(Request $request)
    {
        if (trim($request->search_product) != '')
        {
            SEOTools::setTitle('Sản phẩm');
            SEOTools::setDescription($request->search_product);
            SEOTools::opengraph()->setUrl($request->url());
            SEOTools::setCanonical($request->url());
            SEOMeta::addKeyword([$request->search_product]);
            $product = Product::where('pro_active', Product::STATUS_PUBLIC);
            $products= $product->where('pro_name','like','%'.$request->search_product.'%');
            if ($request->price)
            {
                $price = $request->price;
                switch ($price)
                {
                    case '1':
                        $products->where('pro_price','<',1000000);
                        break;
                    case '2':
                        $products->whereBetween('pro_price',[1000000,5000000]);
                        break;
                    case '3':
                        $products->whereBetween('pro_price',[5000000,9000000]);
                        break;
                    case '4':
                        $products->whereBetween('pro_price',[9000000,15000000]);
                        break;
                    case '5':
                        $products->whereBetween('pro_price',[15000000,20000000]);
                        break;
                    case '6':
                        $products->where('pro_price','>',20000000);
                        break;

                }
            }
            $products = $product->paginate(6);
            $viewData = [
                'products'           => $products,
                //'cateProduct'       => $cateProduct,
                'query'             => $request->query(),
            ];
            return view('product.search_product', $viewData);
        }
        return redirect('/')->with('warning','Tìm kiếm không hợp lệ!');
    }

}

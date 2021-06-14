<?php


namespace App\Http\Controllers\Catalog;

use App\Http\Contracts\Production\Catalog; //Не удалять!!!!!!!!!!
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{

    protected $entity;
    protected $param;
    protected $data;

    function __construct(Request $request)
    {
        $this->entity = Catalog::class;

        $this->param = $request->id;

        $this->data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
            'category_id' => $request->category_id,
            'unit' => $request->unit,
            'description' => $request->description
        ];
    }


    //    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productOne(Request $request)
//    {
//        $container = app();
//        $product = $container->make(Production::class)
//            ->getProductOne($request->id);
//        return new Resource($product);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function getAll()
//    {
//        $container = app();
//        $productsAll = $container->make(Production::class)
//            ->getProductsAll();
//        return new Resource($productsAll);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsCategory(Request $request)
//    {
//        $container = app();
//        $productsCategory = $container->make(Production::class)
//            ->getProductsCategory($request->category);
//        return new Resource($productsCategory);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function ProductsSearch(Request $request)
//    {
//        $container = app();
//        $productsSearch = $container->make(Production::class)
//            ->getProductsSearch($request->search);
//        return new Resource($productsSearch);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsNew()
//    {
//        $container = app();
//        $productsNew = $container->make(Production::class)
//            ->getProductsNew();
//        return new Resource($productsNew);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsSale()
//    {
//        $container = app();
//        $productsSale = $container->make(Production::class)
//            ->getProductsSale();
//        return new Resource($productsSale);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsAction()
//    {
//        $container = app();
//        $productsAction = $container->make(Production::class)
//            ->getProductsAction();
//        return new Resource($productsAction);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsBestseller()
//    {
//        $container = app();
//        $productsBestseller = $container->make(Production::class)
//            ->getProductsBestseller();
//        return new Resource($productsBestseller);
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function productsSimilar()
//    {
//        $container = app();
//        $productsSimilar = $container->make(Production::class)
//            ->getProductsSimilar();
//        return new Resource($productsSimilar);
//    }

}

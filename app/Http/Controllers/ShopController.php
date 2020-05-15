<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ShopRepository;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Requests\CartRequest;
use App\Http\Requests\MailerRequest;

class ShopController extends Controller
{

    /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ShopRepository  $repository)
    {
        $this->repository = $repository;
        //$this->middleware('auth');
    }

    /**
     * Show the application home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Shows index view
    public function index(Request $request)// $POST_[''], $_GET['top9'], $_GET['search]
    {
       $products = $this->repository->funcSelect($request);
       // Ajax response
       if ($request->ajax()) {
            return response()->json([
                'table' => view("shop.brick-standard", ['products' => $products])->render(),
            ]);
        } 
       //Submit 
        return view('shop.index', ['products' => $products]);
    }

    /**
     * Show the application product-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Shows index view
    public function product($id, Product $model_product)
    {
        
        //$product = $this->repository->funcSelectOne($id);
        $product = $model_product->find($id);
        return view('shop.product', compact('product'));
    }

    /**
     * Show the application cart-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Shows index view
    public function cart(Request $request, ShopRepository $repository)
    {
        $carts = $repository->fromCart();

        //Ajax response
        if ($request->ajax()) {
            return response()->json([
                'table' => view("shop.cart-standard", ['carts' => $carts])->render(),
            ]);
        } 

        return view('shop.cart', compact('carts'));
    }  

    /**
     * Store data to cart
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function tocart(CartRequest $request)
    {
        $this->repository->store($request);

        return redirect(route('cart'));
    }

    /**
     * Remove all from cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function clearall(Request $request, Cart $model_cart)
    {
        $model_cart->truncate();

         //Ajax response
        if ($request->ajax()) {
            return response()->json();
        } 

        return redirect(route('cart'));
    }

    /**
     * Remove one from cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function clearone(Request $request)
    {
        $this->repository->clearone($request);
    }


    /**
     * Mailer of sending message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function mailer(MailerRequest $request)
    {
        
        if(isset($request->validator) && $request->validator->fails()) //if you need validator->errors() in Controller
        {
            return json_encode($request->validator->errors());
        }

        return $this->repository->mailer($request);
    }            



}

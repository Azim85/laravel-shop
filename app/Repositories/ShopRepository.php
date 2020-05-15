<?php

namespace App\Repositories;

use App\Models\ {
    Product,
    Cart,
    Message
};

class ShopRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_product;
    protected $model_cart;
    protected $model_message;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Product $product, Cart $cart, Message $message)
    {
        $this->model_product = $product;
        $this->model_cart = $cart;
         $this->model_message = $message;
    }
    /**
     * Create a query for Products.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelect($request)// $request->top9, $request->search
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image');
            //->where('top9', 1);
            if(isset($request->top9)){
                $query->where('top9', $request->top9);
            }else{
                $query->where('top9', 1);
            }
            if(isset($request->search)){
                $query->where('name', 'like', '%'. $request->search.'%');
            }
        return $query->get();
    }

    /**
     * Create a query for the exact Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelectOne($id)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            ->where('id', $id);
        return $query->get();
    }

    public function fromCart()
    {
        $query = $this->model_cart
        ->select('id', 'name', 'price', 'image');
        return $query->get();
    }  

    public function store( $request)
    {
        //Cart::create($request->All());
        $this->model_cart->name = $request->name;
        $this->model_cart->price = $request->price;
        $this->model_cart->image = $request->image;
        $this->model_cart->save();

    }
   
   // *
   //   * Remove all from cart.
   //   *
   //   * @return \Illuminate\Contracts\Support\Renderable
     
    
   //  public function clearall()
   //  {
   //      $this->model_cart->truncate();

   //  }
    /**
     * Remove one from cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function clearone($request)
    {
        $cart = $this->model_cart->find($request->id);
        $cart->delete();
    }

     /**
     * Mailer of sending message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function mailer($request)
    {
        //Message::create($request->All());
        $this->model_message->email = $request->email;
        $this->model_message->save();

        $title = 'Message from site - ' .date('d-m-Y H:i:s');
        $message = 'Message:' . $request->email;
        $client = new \GuzzleHttp\Client([
            'headers' => [
                //'Authorization' => '9267585bb333341dc049321d4e74398f',
                //'Content-Type' => 'application/json',
             ]
         ]);
         $response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . $request->email .  '&title=' . $title . '&message=' . $message,
          [
             //...
          ]);    
         //return json_decode($response->getBody()->getContents());  
         return response()->json([
                 'answer' => $response->getBody()->getContents(),
             ]);
    }

}

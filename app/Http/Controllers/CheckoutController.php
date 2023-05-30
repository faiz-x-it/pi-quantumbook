<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\ShippingAddressRequest;
use App\Order;
use App\OrderDetail;
use App\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Cart;
use rizalafani\rajaongkirlaravel\app\Kota;
use rizalafani\rajaongkirlaravel\app\Provinsi;
use rizalafani\rajaongkirlaravel\RajaOngkir;

class CheckoutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_province()
    {
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 7f4e4bba9848ea14178aa9e6fdd44183"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {echo "cURL Error #:" . $err;} else {//ini kita decode data nya terlebih dahulu
    $response=json_decode($response,true);//ini untuk mengambil data provinsi yang ada di dalam rajaongkir result
    $data_pengirim = $response['rajaongkir']['results'];return $data_pengirim;}    }
//kota    

    public function get_city($id)
    {
        $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 7f4e4bba9848ea14178aa9e6fdd44183"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {echo "cURL Error #:" . $err;} else {$response=json_decode($response,true);$data_kota = $response['rajaongkir']['results'];return json_encode($data_kota);}    }
public function get_ongkir($origin, $destination, $weight, $courier){
    $curl = curl_init();curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
        CURLOPT_HTTPHEADER => array("content-type: application/x-www-form-urlencoded","key: 7f4e4bba9848ea14178aa9e6fdd44183"),));$response = curl_exec($curl);$err = curl_error($curl);curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response=json_decode($response,true);
            $data_ongkir = $response['rajaongkir']['results'];
            return json_encode($data_ongkir);}}
    public function index()
    {
        if (Cart::content()->count()){
//memanggil function get_province
$provinsi = $this->get_province();
//mengarah kepada file checkout.blade.php yang ada di view
return view('public.checkout-page', ['provinsi' => $provinsi]);
        }
        abort(403, 'Cart is empty! you can not checkout');
    }
    public function pay(Request $request)
{
    
    $order = new Order();
    $user = Auth::user();

    $shipping_address = ShippingAddress::where('user_id', $user->id)->latest()->first();

    $order->user_id = $user->id;
    $order->shipping_id = $shipping_address->id;
    $order->total_price = Cart::total();
    $order->total_payment = $shipping_address->layanan;

    $order->save();

    $order_id = $order->id;

    foreach (Cart::content() as $cartItem)
    {
        $total = $request->cart_total;
        $orderDetails = new OrderDetail();

        $orderDetails->order_id = $order_id;
        $orderDetails->book_id = $cartItem->id;
        $orderDetails->book_name = $cartItem->name;
        $orderDetails->price = $cartItem->price;
        $orderDetails->book_quantity = $cartItem->qty;

        $orderDetails->save();

        Cart::remove($cartItem->rowId);

        $remove_product = Book::findOrFail($orderDetails->book_id);

        $remove_product->update([
            'quantity' => $remove_product->quantity - $orderDetails->book_quantity,
        ]);

    }

    return redirect()->route('user.home')
        ->with('success_message', 'Order placed successfully. Wait for confirmation.');

    
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShippingAddressRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $shipping = ShippingAddress::create($input);

        return redirect()->route('cart.payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('public.payment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

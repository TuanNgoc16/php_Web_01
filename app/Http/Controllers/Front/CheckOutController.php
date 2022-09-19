<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use function Symfony\Component\Translation\t;


class CheckOutController extends Controller
{
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total','subtotal'));
    }

   public function addOrder(Request $request){
       //1.them don hang
        $order = Order::create($request->all());
       //2 them chi tiet don
       $carts = Cart::content();
       foreach ($carts as $cart){
           $data=[
               'order_id' => $order->id,
               'product_id' => $cart->id,
               'qty' => $cart->qty,
               'amount' => $cart->price,
               'total' => $cart->price * $cart->qty,
           ];
           OrderDetail::create($data);
       }
       if($request->payment_type == 'pay_later'){

            // 3 gui email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order,$total,$subtotal);

            //4 xoa gio hang
            Cart::destroy();
            //5 tra ve kqua
           return redirect('checkout/result')->with('notification','success!!');
        }
        if($request->payment_type == 'online_payment'){
            //01 lay url thanh toan vnpay
           $data_url = VNPay::vnpay_create_payment([
              'vnp_TxnRef' => $order->id,
               'vnp_OrderInfo' => 'Mo ta don hang',
               'vnp_Amount' => Cart::total(0, '', '') * 23075,// nhan vs ti gia sang tien vuet

           ]);
           //02 chuyen huong toi url lay dc
           return redirect()->to($data_url);
       }
//        else{
//            return "online payment method is not supported";
//        }

   }

   public function vnPayCheck(Request $request){
        //01 lay data tu URL gui ve $vnpay
       $vnp_ResponseCode = $request->get('vnp_ResponseCode');// ma phan hoi thanh toan
       $vnp_TxnRef = $request->get('vnp_TxnRef'); // tiched_id
       $vnp_Amount = $request->get('vnp_Amount'); // so tien thanh toan
         //2 kiem tra ket qua giao dich tra ve tu vnpay
       if($vnp_ResponseCode != null){
           if ($vnp_ResponseCode == 00){
               // gui email
               $order = Order::find($vnp_TxnRef);
               $total = Cart::total();
               $subtotal = Cart::subtotal();
               $this->sendEmail($order,$total,$subtotal);

               //xoa gio hang
               Cart::destroy($order);

               //thong bao ket qua thanh cong
//               return "Success!  Please check your email ";
               return redirect('checkout/result')->with('notification','success!!');

           }
           else{
               // neu k thanh cong
               // xoa don hang da them vao database
               Order::find($vnp_TxnRef)->delete();
               // tra ve thong bao loi
               
               return redirect('checkout/result')->with('notification','ERROR: Payment failed or canceled!!');
           }
       }
   }

   public function result(){
        $notification = session('notification');

       return view('front.checkout.result',compact('notification'));
   }

   private function sendEmail ($order,$total,$subtotal){
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order','total','subtotal'), function ($message) use ($email_to) {
            $message->from('pnggoc16@gmail.com','Code Web Laravel');
            $message->to($email_to, $email_to);
            $message->subject('Order Notification');

        });
   }
}

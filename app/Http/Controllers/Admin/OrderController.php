<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Checkout;
use App\OrdersDetail;
use Carbon\Carbon;
use Mail;

class OrderController extends Controller
{
	public function __construct(Checkout $mcheckout, OrdersDetail $mordersdetail){
		$this->mcheckout 	   = $mcheckout;
		$this->mordersdetail = $mordersdetail;
	}
    public function index(){
    	Carbon::setLocale('vi'); // hiển thị ngôn ngữ tiếng việt.

      	$now    = Carbon::now();
      	// dd($now);
  		$orders = $this->mcheckout->getOrder();
    	return view('admin.order.index', compact('orders', 'now'));
    }
    public function getOrder($id){
    	$now          = Carbon::now();
    	$findOrder    = $this->mcheckout->findOrder($id);
    	$ordersDetail = $this->mordersdetail->getProductDetail($id);
    	return view('admin.order.info', compact('findOrder', 'now', 'ordersDetail'));
    }
    public function changeStatus(Request $request){
        $id     = $request->id;
        $status = $request->status;
        $findOrder    = $this->mcheckout->findOrder($id);
        $email        = $findOrder->orders_email;
        $ordersDetail = $this->mordersdetail->getProductDetail($id);

        if($status == 0){
          $status = 1;
          $mail = [
                  'name'     => $findOrder->orders_name,
                  'total'    => $findOrder->orders_total,
                  'andress'  => $findOrder->orders_andress,
                  'phone'    => $findOrder->orders_phone,
                  'payment'  => $findOrder->orders_payment,
                  'products' => $ordersDetail,
                ];
          Mail::send('vendor.mail.html.verification', $mail, function($msg) use($email){
              $msg->to($email)->subject('CLOTHES: XÁC NHẬN ĐƠN HÀNG!');
              $msg->from('phucduykhang16202@gmail', "BAN QUẢN TRỊ");
          });
        }elseif($status == 1) {
          $status = 2;
        }
        $data   = ['orders_stauts' => $status,];        
        $this->mcheckout->changeStatus($id, $data);
    }
    public function successOrder(Request $request){
      $id     = $request->id;
      $this->mcheckout->successOrder($id);
      return response()->json([
        'success' => 'Hoàn tất đơn hàng',
      ]);
      // echo "<pre>";
      //   print_r($request->all());
      // echo "</pre>";
    }
}

<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\MainCategoryModel;
use App\Models\OrdersModel;
use App\Models\CartModel;
use CodeIgniter\I18n\Time;


class Cart extends BaseController
{
    public function cart()
    {
        $newsession = new CartModel();
        $order = new OrdersModel();

        $fetch = $newsession->where('user_id', session('userid'))->where('order_status', 0)->first();

        $order->select('*');
        $order->join('product', 'product.id = order.product_id');
        $data = $order->where('cart_id', $fetch['id'])->get()->getResultArray();
        // $data['items'] = $order->findAll();
        return view('user/pages/cart', ['items' => $data]);
    }
    public function buy($id = null)
    {
        if (session('login') != true) {
            return redirect()->to('login');
        } else {
            $myTime = new Time('now');
            $newsession = new CartModel();
            $product = new ProductModel();
            $order = new OrdersModel();

            $fetch = $newsession->where('user_id', session('userid'))->where('order_status', 0)->first();
            $pro = $product->find($id);

            if (empty($fetch)) {
                $newid = md5($myTime);
                $data = [
                    'id' => $newid,
                    'user_id' => session('userid'),
                ];
                $data2 = [
                    'product_id' => $id,
                    'product_qty' => 1,
                    'product_price' => $pro['product_price'],
                    'cart_id' => $newid,
                ];

                $newsession->insert($data);
                $order->insert($data2);
                $order->select('*');
                $order->join('product', 'product.id = order.product_id');
                $order->where('cart_id', $newid);
                $data3 = $order->get()->getResultArray();
                return view('user/pages/cart', ['items' => $data3]);
            } else {
                
                $pid = $order->where('cart_id', $fetch['id'])->where('product_id', $id)->first();
                if (empty($pid)) {
                    $data2 = [
                        'product_id' => $id,
                        'product_quantity' => 1,
                        'product_price' => $pro['product_price'],
                        'cart_id' => $fetch['id'],
                    ];
                    $order->insert($data2);
                }else {
                    $up = [
                        'id' => $pid['id'],
                        'product_quantity' => $pid['product_quantity']+1
                    ];
                    $order->save($up);
                }
                
                $order->select('*');
                $order->join('product', 'product.id = order.product_id');
                // $order->where('cart_id', $fetch['id']);
                $data3 = $order->where('cart_id', $fetch['id'])->get()->getResultArray();
                // die(print_r($data3));
                // return redirect('cart')->withInput(['items' => $data3]);
                return view('user/pages/cart', ['items' => $data3]);
                // $hello = $newsession->findAll();
                // die();

            }


            // $data['items'] = $order->findAll();
            // return view('user/product/cart', ['items' => $data3]);
            // $oldsession = $newsession->where('id', md5(session('userid'))
            // if (md5(session('userid'))

            // $hello = $newsession->findAll();

            // die(md5($myTime));

        }
    }
    public function productUpdate()
    {
        $order = new OrdersModel();
        $order->where('cart_id', $this->request->getVar('cid'));
        // $id = $this->request->getVar('qty');
        $id = $order->where('product_id', $this->request->getVar('pid'))->first();
        // $order->update($id, $data);
        // die($id);
        $data = [
            'id' => $id['id'],
            'product_quantity' => $this->request->getVar('qty')
        ];
        $order->save($data);
        // $val = 
        echo json_encode($data);
    }
    public function productDelete(){
        $order = new OrdersModel();
        $order->where('product_id', $this->request->getVar('pid'));
        $order->where('cart_id', $this->request->getVar('cid'));
        $id = $order->first();
        $order->delete($id);
        echo json_encode($id);
    }
}
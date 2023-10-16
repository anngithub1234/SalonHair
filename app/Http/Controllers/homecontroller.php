<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartFunction;
use App\Models\Item;
use App\Models\Review;
use App\Models\service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class homecontroller extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        $data=User::get();
        $service=service::get();
        $reviews=Review::get();
        $cart = Cart::get();
        $checkout=CartFunction::get();
        $now = Carbon::now();
        $startOfMonth = $now->startOfMonth();
    $endOfMonth = $now->endOfMonth();
    $orderDirection = request()->input('order', 'asc');
    
        // Calculate monthly revenue
        $monthlyRevenue = CartFunction::selectRaw('YEAR(created_at) year, MONTH(created_at) month, SUM(total_cost) total')
            ->groupBy('year', 'month')
            ->orderBy('year', $orderDirection)
            ->orderBy('month', $orderDirection)
            ->get();

    $totalMonthlyRevenue = CartFunction::whereBetween('created_at', [$startOfMonth, $endOfMonth])
        ->sum('total_cost');
        if($role=='1'){
            
            return view('admin',compact('data','service','reviews','cart','checkout','totalMonthlyRevenue','monthlyRevenue', 'orderDirection'));
        }elseif($role=='2'){
            return view('staff');
        }else{
            $items = Item::all();
            return view ('customer')->with('items',$items);
        }
    }

    public function Adduser()
    {
        $data = User::get();
        return view('adminfunction',compact('data'));
    }


    public function saveuser(Request $request){
         $name = $request->name;
         $email=$request->email;
         $role=$request->role;
         $password=bcrypt($request->password);
         $users=new User();
         $users->name=$name;
         $users->email=$email;
         $users->role=$role;
         $users->password=$password;
         $users->save();
         return redirect()->back();

    }
    public function edituser($id){

        $data = User::where('id','=',$id)->first();
        return view('editusers',compact('data'));
    }
    public function finishEdituser(Request $request){
        $id=$request->id;
        $name = $request->name;
        $email=$request->email;
        $role=$request->role;
        $password=$request->password;
        User::where('id','=',$id)->update([
        'name'=>$name,
        'email'=>$email,
        'role'=>$role,
        'password'=>$password
        ]);
        return redirect()->back()->with('success','user Updated successfully');
    }

public function deleteuser($id){
 User::where('id','=',$id)->delete();
 return redirect()->back()->with('success','user deleted successfully');
 }

 public function Addservice()
 {
     return view('addservice');
 }

 public function saveservice(Request $request){
    $servicename = $request->servicename;
    $category=$request->category;
    $price=$request->price;
    $discount=$request->discount;
    $image=$request->image;
    $s=new service();
    $s->servicename=$servicename;
    $s->category=$category;
    $s->price=$price;
    $s->discount=$discount;
    $s->image=$image;
    $s->save();
    return redirect()->back();

}


public function servicefin(Request $request, $id){
    $servicename = $request->input('servicename');
    $category = $request->input('category');
    $price = $request->input('price');
    $discount = $request->input('discount');
    $image = $request->input('image');

    service::where('id', $id)->update([
        'servicename' => $servicename,
        'category' => $category,
        'price' => $price,
        'discount' => $discount,
        'image' => $image
    ]);

    return redirect()->back()->with('success', 'Service updated successfully');
}


public function editser($id){

    $service = service::where('id','=',$id)->first();
    return view('editservice',compact('service'));
}
public function deleteser($id){
    service::where('id','=',$id)->delete();
    return redirect()->back()->with('success','user deleted successfully');
    }
}

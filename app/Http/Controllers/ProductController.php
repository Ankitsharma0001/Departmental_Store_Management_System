<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;

class ProductController extends Controller
{
    //
     public function index(){

      return view('welcome');
    }

    public function manage(){

      $products=Product::paginate(5);
      return view('manage',compact('products'));
    }

    public function create(){
 
       return view('create');
    }
    
    
  public function store(Request $request){
    $this->validate($request,[
   'category_name' => 'required|max:20',
   'company_name' => 'required',
   'product_name' => 'required',
   'price' => 'required'

    ]);

      if (!ctype_alpha($request->category_name)){
        echo "Please Enter a valid Category Name";
      } 

    $product = new Product;
    $product->category_name = $request->category_name;
    $product->company_name = $request->company_name;
    $product->product_name = $request->product_name;
    $product->price        = $request->price;
    $product->save();
    return redirect(route('create'))->with('successMsg','Product Successfully Added'); 
  }

   public function edit($id){
   $product = Product::find($id);
   return view('edit',compact('product'));
   }

   
 public function update(Request $request, $id){
  $this->validate($request,[
   'category_name' => 'required',
   'company_name' => 'required',
   'product_name' => 'required',
   'price' => 'required'

    ]);

    $product = Product::find($id);
    $product->category_name = $request->category_name;
    $product->company_name = $request->company_name;
    $product->product_name = $request->product_name;
    $product->price        = $request->price;
    $product->save();
    return redirect(route('home'))->with('successMsg','Product Successfully Updated');

  }

  public function delete($id){

    Product::find($id)->delete();
  return redirect(route('home'))->with('successMsg','Product Deleted Successfully ');

   }



  //   ************************     customers details   ************************** 

   public function add_customers(){

      return view('add_customers');
    }

   public function add(Request $request){
    $this->validate($request,[
   'cus_name' => 'required',
   'cus_email' => 'required|email',
   'cus_products' => 'required',
   'cus_bill' => 'required'

    ]);

    $customer = new Customer;
    $customer->cus_name = $request->cus_name;
    $customer->cus_email = $request->cus_email;
    $customer->cus_products = $request->cus_products;
    $customer->cus_bill     = $request->cus_bill;
    $customer->save();
    return redirect(route('add_customers'))->with('successMsg2','Customer Successfully Added'); 
  }

   public function manage_customers(){

      $customers=Customer::paginate(5);
      return view('manage_customers',compact('customers'));
    }

    public function edit_customers($id){
   $customer = Customer::find($id);
   return view('edit_customers', compact('customer'));
   }

   
 public function update_customers(Request $request, $id){
  $this->validate($request,[
   'cus_name' => 'required',
   'cus_email' => 'required',
   'cus_products' => 'required',
   'cus_bill' => 'required'

    ]);

    $customer = Customer::find($id);
    $customer->cus_name = $request->cus_name;
    $customer->cus_email = $request->cus_email;
    $customer->cus_products = $request->cus_products;
    $customer->cus_bill       = $request->cus_bill;
    $customer->save();
    return redirect(route('manage_customers'))->with('successMsg2','Customer Successfully Updated');

  }

  public function delete_customers($id){

    Customer::find($id)->delete();
  return redirect(route('manage_customers'))->with('successMsg2','Product Delete Successfully ');

   }

}
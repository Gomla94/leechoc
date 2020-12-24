<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use App\Model\Order;
use App\Model\Images;
use Validator;
use App\Model\HomeText;
use App\Model\Product;
use App\Model\Category;
use App\Model\OrderDetails;
use Illuminate\Http\Request;
use App\Http\Requests\CreateOrderRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(4)->get();
        $categories = Category::take(3)->get();
        $more_categories = Category::skip(3)->take(3)->get();
        $homepage = HomeText::first();
        $slider_images = Images::skip(0)->take(3)->get();
        $home_page_first_photo = Images::skip(3)->take(1)->first();
        $home_page_second_photo = Images::skip(4)->take(1)->first();
        $home_page_third_photo = Images::skip(5)->take(1)->first();
        $home_page_fourth_photo = Images::skip(6)->take(1)->first();
        $home_page_fifth_photo = Images::skip(7)->take(1)->first();
        $home_page_sixth_photo = Images::skip(8)->take(1)->first();
        $home_page_seventh_photo = Images::skip(9)->take(1)->first();
        return view('front.welcome', compact(
            'products',
            'homepage',
            'slider_images',
            'home_page_first_photo',
            'home_page_second_photo',
            'home_page_third_photo',
            'home_page_fourth_photo',
            'home_page_fifth_photo',
            'home_page_sixth_photo',
            'home_page_seventh_photo',
            'categories',
            'more_categories'
        ));
    }

    public function all()
    {
        $categories = Category::all();
        return view('front.all', compact('categories'));
    }


    public function products()
    {
        $products = Product::paginate(12);
        $categories = Category::all();
        return view('front.products', compact('products', 'categories'));
    }

    public function filter_products($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();
        $categories = Category::where('id', $category_id)->first();
        return view('front.products', compact('products', 'categories'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contactus');
    }

    public function cart()
    {
        return view('front.checkout');
    }

    // public function store()
    // {
    //     $products = Product::all();
    //     return view('products', compact('products'));
    // }

    public function checkout(Request $request)
    {

        $order_products = json_decode($request->cart);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        if ($validator->passes()) {
            $order_products = json_decode($request->cart);
            $new_order = new Order;
            $new_order->user_name = $request->name;
            $new_order->user_phone = $request->phone;
            $new_order->user_address = $request->address;
            $new_order->flag = 'cash on delivery';
            $new_order->status = 'pending';
            $new_order->save();

            foreach ($order_products as $order) {
                $order_details = new OrderDetails;
                $order_details->order_id = $new_order->id;
                $order_details->product_name = $order->name;
                $order_details->product_image = $order->image;
                $order_details->product_price = $order->price;
                $order_details->quantity = $order->quantity;
                $order_details->total = $order->quantity * $order->price;
                $order_details->save();
            }

            return redirect()->route('home');
        } else {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
    }

    public function change_password_form()
    {
        return view('password.change_password');
    }

    public function change_password(Request $request)
    {
        $request->validate(['password' => 'required']);
        auth()->user()->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('products.index');
    }
}

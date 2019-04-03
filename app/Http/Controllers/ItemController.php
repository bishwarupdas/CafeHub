<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;
use App\Category;
use App\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


    public function billingItems() {

        $tab = "customer";

        $categories = Category::all();
        $items = Item::all();

        $data = array();
        foreach ($items as $key => $item) {
            foreach ($categories as $cat_key => $category) {
                if($category->id == $item->category_id) {
                    $data[$category->name][$key]['id'] = $item->id;
                    $data[$category->name][$key]['name'] = $item->name;
                    $data[$category->name][$key]['category_id'] = $item->category_id;
                    $data[$category->name][$key]['category_name'] = $category->name;
                    $data[$category->name][$key]['is_addon'] = $item->is_addon;
                    $data[$category->name][$key]['price'] = $item->price;
                    $data[$category->name][$key]['discount_percentage'] = $item->discount_percentage;
                    $after_discount_price = $item->price - (($item->price * $item->discount_percentage)/100);
                    $data[$category->name][$key]['after_discount_price'] = $after_discount_price;
                    $data[$category->name][$key]['disabled'] = $item->disabled;
                }
            }
        }

        return view('bill.item', compact(['tab', 'data']));
    }
}

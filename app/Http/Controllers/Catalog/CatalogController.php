<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Http\Requests\CatalogRequest;

class CatalogController extends Controller
{

    public function __construct()
    {
    
        $this->middleware('catalog.access:' . config("const.defaultUser"))->only(['index', 'show']);
        $this->middleware('catalog.access:' . config("const.admin"))->only(['create', 'store', 'edit', 'update', 'destroy']);
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get a list of all the items in the catalog
        //and display them 
        $items = Catalog::all();
        // $token = csrf_token();
        // >with('token', $token)
        return view('Catalog.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalog = new Catalog;
        return view('catalog/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogRequest $request)
    {
        Catalog::create([
            'name' => $request->name,
            'Category' => $request->Category,
            'description' => $request->description,
            'price' =>  $request->price,
            'supplier' => $request->supplier,
        ]);
        return redirect(url('catalog'));
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
        $item = Catalog::findOrFail($id);
        return view('catalog/show')->with('item', $item);
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
        $item = Catalog::findOrFail($id);
        return view('catalog/edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatalogRequest $request, $id)
    {
        //
        $item = Catalog::findOrFail($id);
        $item -> name = $request -> name;
        $item -> price = $request -> price;
        $item -> description = $request -> description;
        $item -> Category = $request -> Category;
        $item -> supplier = $request -> supplier;
        $item->save();
        return redirect(url('catalog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Catalog::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }



    public function filter(Request $request){

        $items=Catalog::all()
        ->where('price', '>=', $request->minPrice)
        ->where('price', '<=', $request->maxPrice)
        ->sortBy('price');

        return view('catalog/filter')->with('items', $items);
    }

    public function search(Request $request){

        $items = Catalog::query()
            ->where('name', 'LIKE', "%{$request->name}%")
            ->get();
    
        // Return the search view with the results compacted
        return view('catalog/search')->with('items', $items);
    }
}

// php artisan route:list
// catalog.destroy
// middleware - request->middleware->server, filter the requests based on criteria.
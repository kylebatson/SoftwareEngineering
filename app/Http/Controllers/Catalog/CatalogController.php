<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Http\Requests\catalog\CatalogRequest;

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
        return view("Catalog.create")->with('catalog', $catalog);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Catalog::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'supplier' => $request->supplier,
            'description' => $request->description,
        ]);
        // protected $fillable = ["name", "category", "price", "supplier", "description"];

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
        $item = Catalog::findOrFail($id);
        return view('Catalog.show')->with('item', $item);
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
        $item = Catalog::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }


    public function search(Request $request)
    {
        $request->validate([
            'minPrice' => "required|numeric",
            'maxPrice' => "required|numeric",
        ]);

        return response()->json(["DATA" => "success"]);
        //
    }
}

// php artisan route:list
// catalog.destroy
// middleware - request->middleware->server, filter the requests based on criteria.
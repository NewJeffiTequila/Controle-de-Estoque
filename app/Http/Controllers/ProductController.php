<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use GuzzleHttp\RequestOptions;

class ProductController extends Controller
{
    private $rota = 'Produto';
    private $view = 'auth.product.index';
    private $titulo = 'Produto';

    public function __construct(){
        
        view()->share('rota', 'Produto.');
        view()->share('titulo', $this->titulo);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('name', 'desc')->get();
        return view('auth.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::transaction();
            try {
                Product::create([
                    'name' =>  $request->name,
                    'amount' =>  $request->amount,
                    'value_buy' =>  $request->value_buy,
                    // 'name' =>  $request->name,
                ]);
        \DB::commit();
                return redirect('Produto')->with(['success'=>'Produto cadastro com sucesso.']);        
            } catch (\Throwable $th) {
                //throw $th;
        \DB::rollback();
                return redirect()->back()->with(['error'=>'Ocorreu um erro tente novamente mais tarde. '.$e->getMessage()]);
        
            }
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
}

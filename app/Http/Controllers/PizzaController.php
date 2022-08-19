<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pizza;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::orderBy('prezzo','asc')->get();

        foreach($pizzas as $pizza){

            if($pizza->nome == 'Veg'){
                $pizza->vegetariana = 1;
            }
        }
        return view('pizzas.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizzas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();


        $newPizza = new Pizza();
        // $newPizza->nome = $data['nome'];
        // $newPizza->slug = Str::slug($data['nome'], '-');
        // $newPizza->prezzo = $data['prezzo'];
        // $newPizza->vegetariana = $data['vegetariana'];
        $data['slug'] = Str::slug($data['nome'], '-');
        $newPizza->fill($data);

        $newPizza->save();

        return redirect()->route('pizzas.show', $newPizza);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dump($id);
        $pizza = Pizza::find($id);
        if($pizza){
            return view('pizzas.show', compact('pizza'));
        } else {
            abort(404, 'Errore 404 | nch! BEEEEELLA');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Pizza::find($id);
        if($pizza){
            return view('pizzas.edit', compact('pizza'));
        } else {
            abort(404, 'Errore 404 | nch! BEEEEELLA');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        // $pizza = Pizza::find($id);
        $data = $request->all();
        // dd($data);
        // RICREO LO SLUG NELLA POSSIBILITà CHE ABBIA CAMBIATO IL NOME
        $data['slug'] = Str::slug($data['nome'], '-');
        $pizza->update($data);

        return redirect()->route('pizzas.show', $pizza);
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

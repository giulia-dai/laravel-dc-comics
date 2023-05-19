<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comic\StoreComicRequest;
use App\Http\Requests\Comic\UpdateComicRequest;
use App\Models\Comic;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {

        // $request->validate([
        //     'thumb' => 'required|url|max:255',
        //     'title' => 'required|max:50',
        //     'type' => 'required|max:20',
        //     'series' => 'required|max:30',
        //     'sale_date' => 'required',
        //     'price' => 'required|decimal:2',
        //     'description' => 'nullable|max:2000'
        // ]);

        // $form_data = $this->validation($request->all());
        $form_data = $request->validated();

        $newComic = new Comic();

        $newComic->fill($form_data); //questo metodo compila al posto nostro i valori dentro al form ma laravel per proteggersi da un utente malintenzionato è necessario definire quali sono gli elementi fillable

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);

        // $newComic->thumb = $form_data['thumb'];
        // $newComic->title = $form_data['title'];
        // $newComic->type = $form_data['type'];
        // $newComic->series = $form_data['series'];
        // $newComic->price = $form_data['price'];
        // $newComic->description = $form_data['description'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {


        // $request->validate([
        //     'thumb' => 'required|max:255',
        //     'title' => 'required|max:50',
        //     'type' => 'required|max:20',
        //     'series' => 'required|max:30',
        //     'sale_date' => 'required',
        //     'price' => 'required|decimal:2',
        //     'description' => 'nullable|max:2000'
        // ]);


        $comic = Comic::findOrFail($id);
        // $form_data = $this->validation($request->all());
        $form_data = $request->validated();

        $comic->update($form_data); //update fa sia la fill che il salvataggio


        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }


    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'thumb' => 'required|url|max:255',
                'title' => 'required|max:50',
                'type' => 'required|max:20',
                'series' => 'required|max:30',
                'sale_date' => 'required',
                'price' => 'required|decimal:2',
                'description' => 'nullable|max:2000'
            ],

            [
                'thumb.required' => 'URL dell\'immagine richiesto',
                'thumb.url' => 'URL non valido, esermpio http://www.ilmiosito.it',
                'thumb.max' => 'l\'URL deve contenere al massimo 255 caratteri',

                'title.required' => 'titolo richiesto',
                'title.max' => 'Il campo titolo deve contenere al massimo 50 caratteri',

                'type.required' => 'type richiesto',
                'type.max' => 'Il campo type deve contenere al massimo 20 caratteri',

                'series.require' => 'il campo series è richiiesto',
                'series.max' => 'Il campo type deve contenere al massimo 30 caratteri',

                'sale_date.required' => 'data richiesta',

                'price.required' => 'price richiesto',
                'price.decimal' => 'Il campo price richiede al massimo 2 valori decimali',

                'description.max' => 'Il campo description deve avere al massimo 2000 caratteri',
            ]
        )->validate();

        return $validator;
    }
}

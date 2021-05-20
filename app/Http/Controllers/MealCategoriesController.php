<?php

namespace App\Http\Controllers;

use App\Models\MealCategories;
use Illuminate\Http\Request;

class MealCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mealCategoriess = MealCategories::all();
        return $mealCategoriess;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (MealCategories::create($request->all())) {
            return response()->json(
                [
                    'done' => 'plat enregistré avec succes'
                ]
                );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealCategories  $mealCategories
     * @return \Illuminate\Http\Response
     */
    public function show(MealCategories $mealCategories)
    {
        return $mealCategories;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MealCategories  $mealCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealCategories $mealCategories)
    {
        if ($mealCategories->update($request->all())) {
            return response()->json(
                [
                    'done' => 'categorie de plat modifié avec succes'
                ]
                );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealCategories  $mealCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealCategories $mealCategories)
    {
        $mealCategories->delete();
    }
}

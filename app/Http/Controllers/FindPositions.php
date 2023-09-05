<?php

namespace App\Http\Controllers;

use App\Models\SearchCard;
use App\Models\SearchQuery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FindPositions extends BaseController
{
    public function index()
    {
        dd(123);
    }

    public function createSearchQuery(Request $request)
    {
        try{
            SearchQuery::create([
                'model' => $request->model,
                'price_from' => $request->price_from,
                'price_to' => $request->price_to,
                'user_id' => $request->user_id,
                'is_published' => true,
                'is_parsing' => true,
            ]);
            return response()->json(['data' => true]);
        }
        catch(\Exception $e){
            return response()->json(['data' => false]);
        }
    }

    public function getSearchQueries(Request $request)
    {
        try{
            $queries = SearchQuery::where('user_id', $request->user_id)->where('is_published', true) ->get();
            return response()->json(['data' => $queries]);
        }catch(\Exception $e){
            return response()->json(['data' => []]);
        }
    }

    public function deactivateQuery(Request $request){
        try{
            if($request->id){
                $searchQuery = SearchQuery::where('id', $request->id)->first();
            }
            else{
                $searchQuery = SearchQuery::where('model', $request->model)
                    ->where('price_from', $request->price_from)
                    ->where('price_to', $request->price_to)
                    ->where('user_id', $request->user_id)
                    ->first();
            }

            if ($searchQuery) {
                if ($request->deactivate){
                    $searchQuery->update([
                        'is_parsing' => $request->is_parsing,
                    ]);
                }
                elseif ($request->delete){
                    $searchQuery->update([
                        'is_published' => false,
                        'is_parsing' => false,
                    ]);
                }
                return response()->json(['ans' => true]);
            }
            return response()->json(['ans' => $request]);
        }
        catch(\Exception $e){
            return response()->json(['ans' => $e]);
        }
    }

}

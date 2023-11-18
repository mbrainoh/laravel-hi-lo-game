<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function shuffleCards(Request $request)
    {
        // Retrieve the JSON array from the query string
        $cardsJson = $request->query('cardsJson');

        // If a JSON array is provided, decode and shuffle it
        if (!empty($cardsArray)) {
            $data = json_decode($jsonArray, true);
            shuffle($data);

            return response()->json(['shuffledArray' => $data]);
        }

        return;
    }
}
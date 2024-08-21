<?php

namespace App\Http\Controllers;

use App\Models\mongodb;
use Illuminate\Http\Request;
class MongoController extends Controller
{
    public function index()
    {
        // Retrieve all documents from MongoDB collection
        $documents = mongodb::all();

        return response()->json($documents);
    }

    public function store(Request $request)
    {
        // Insert a new document into MongoDB collection
        $document = mongodb::create($request->all());

        return response()->json($document, 201);
    }
}


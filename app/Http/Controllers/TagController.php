<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50|unique:tags,name',
        ]);

        $tag = Tag::create(['name' => $validated['name']]);

        return redirect()->route('backoffice.product.create')
                         ->with('success', 'Tag créé avec succès !');
    }
}

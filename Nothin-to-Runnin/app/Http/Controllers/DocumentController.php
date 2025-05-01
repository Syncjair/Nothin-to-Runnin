<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function showPrivacy()
    {
        $path = public_path('pdfs/privacyverklaring.pdf');
        return response()->file($path);
    }

    public function showTerms()
    {
        $path = public_path('pdfs/algemene-voorwaarden.pdf');
        return response()->file($path);
    }
}

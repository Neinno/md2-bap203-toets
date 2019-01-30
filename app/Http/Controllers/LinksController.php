<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinksController extends Controller
{
    public function index() {

        $links = Link::all();

        return view('laravel_links', ['links' => $links]);
    }

    public function showLinksForm() {
        return view('form.show_form');
    }

    public function handleLinksForm(Request $request) {
        $validData = $request->validate([
            'title' => 'required|min:8',
            'url' => 'required|url',
            'description' => 'required']);

        $link = new Link;
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;

        $link->save();

        return redirect()->route('form.show_form');
    }

}

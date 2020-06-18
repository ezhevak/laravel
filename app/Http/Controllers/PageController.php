<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index() {
 
        $page = Page::where('slug', 'hello-world')
                    ->where('status','=','ACTIVE')
                    ->first();
        
        SEOMeta::setTitle($page["title"]);
        SEOMeta::setDescription($page["meta_description"]);
        SEOMeta::setCanonical(Url::current());
        SEOMeta::setKeywords($page["meta_keywords"]);

        return view('index',compact('page'));
    }
}

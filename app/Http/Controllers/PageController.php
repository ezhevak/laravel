<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Page;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;


class PageController extends Controller
{
    public function index() {
 
        $page = Page::where('slug', 'hello-world')
                    ->where('status','=','ACTIVE')
                    ->first()
                    ->translate(\App::getLocale(), 'fallbackLocale');

        SEOMeta::setTitle($page["title"]);
        SEOMeta::setDescription($page["meta_description"]);
        SEOMeta::setCanonical(Url::current());
        SEOMeta::setKeywords($page["meta_keywords"]);
        
        SEOTools::opengraph()->addProperty('title', $page["title"]);
        SEOTools::opengraph()->addProperty('description', $page["meta_description"]);
        SEOTools::opengraph()->addProperty('site_name', 'Marseille Resort');
        SEOTools::opengraph()->addProperty('locale', App::getLocale().'_UA');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('url', Url::current());
        SEOTools::opengraph()->addProperty('image', asset('storage/'.$page->image));

        return view('index',compact('page'));
    }
}

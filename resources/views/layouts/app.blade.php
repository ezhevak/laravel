<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()).'-UA' }}" prefix="og: //ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <link rel="alternate" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" hreflang="{{ $localeCode.'-UA'}}" />
    @endforeach
    
    {!! SEO::generate(true) !!}

    @include('layouts.header')
    
  </head>
  <body>
    <div id="app">
      @include('layouts.nav')
      @yield('content')
      @include('layouts.footer')
    </div>
      @include('layouts.scripts')
      @yield('custom-scripts')
  </body>
</html>
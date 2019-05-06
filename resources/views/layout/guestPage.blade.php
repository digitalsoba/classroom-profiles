<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">
<script>window.Laravel = { csrfToken: '{{csrf_token()}}' }</script>
<link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
<script>try { Typekit.load(); } catch (e) { }</script>
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<title>Classroom Profile</title>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
      integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
      crossorigin="" />
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
      integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
      crossorigin=""></script>
<script>
      document.addEventListener('keydown', logKey);
      var lastKey;
      function logKey(e) {
            lastKey = `${e.code}`;
      }

      function searchRoom() {
            //alert(lastKey);
            var searchValue = document.getElementById("floatingSearch").value;
            if(lastKey == 'Enter')
            {
                  alert("equip/" + searchValue);
                  window.location = searchValue;
            }
      }
</script>
</head>

<body>
{{--@include('layout.topnavbar')--}}
<div id="app">
      <topnavbar></topnavbar>
</div>

<div class="class-search">
      <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search"
            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor"
                  d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
            </path>
      </svg><!-- <i class="fas fa-search"></i> -->
      <div class="class-search-inner">
            Enter a class<br>
            <input id = "floatingSearch", type="search", placeholder="EX. JD2211", onkeypress="searchRoom()">
      </div>
</div>


@yield("content")

{{-- Font Awesome --}}
<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"
      integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy"
      crossorigin="anonymous"></script>
{{-- Footer --}}
@include("layout.footer")

{{-- Compiled app.js file --}}
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
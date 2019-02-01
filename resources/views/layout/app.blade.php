<!-- This is the comment layout for every pages on the website -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script>window.Laravel={csrfToken:'{{csrf_token()}}'}</script>
    <!-- Icons -->
    <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
    <!-- Fonts -->
    <script src="//use.typekit.net/gfb2mjm.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <!-- laravel css and bootstrap -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <title>ClassRoom Profile</title>
   <!-- <script type="text/javascript">

        function goToNewPage()
        {
            var url = document.getElementById('list').value;
            if(url != 'none') {
                window.location = url;
            }
        }
    </script> -->
</head>
<body>
    @include('layout.topnavbar')
    <div >
        <img src="{{ URL::to('/') }}/images/placeHolder.jpg" alt="map Place Holder" style="height:400px;width:100%;">
    </div>
    @include('layout.botnavbar')
    @yield("content")

    <script src="/js/app.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
</body>

</html>
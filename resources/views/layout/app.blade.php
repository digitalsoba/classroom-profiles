<!-- This is the comment layout for every pages on the website -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icons -->
    <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
    <!-- Fonts -->
    <script src="//use.typekit.net/gfb2mjm.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <!-- Metaphot frame -->
    <link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
    <!-- laravel css and bootstrap -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <title>ClassRoom Profile</title>
    <script type="text/javascript">
        function goToNewPage()
        {
            var url = document.getElementById('list').value;
            if(url != 'none') {
                window.location = url;
            }
        }
    </script>
</head>

<body>
    @include('layout.topnavbar')
    <div >
        <img src="{{ URL::to('/') }}/images/placeHolder.jpg" alt="map Place Holder" style="height:400px;width:100%;">
    </div>
    @include('layout.botnavbar')

    @yield("content")
</body>

</html>
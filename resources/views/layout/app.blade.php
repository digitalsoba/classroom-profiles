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
    <script>try { Typekit.load(); } catch (e) { }</script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Classroom Profile</title>
    <script type="text/javascript">
        function goToNewPage() {
            var url = document.getElementById('list').value;
            if (url != 'none') {
                window.location = url;
            }
        }
    </script>
</head>
<body>
    @include('layout.topnavbar')
    <div class="container-fluid">
        <div class="row">
            <div class="mapouter">
                <div class="gmap_canvas">

                </div>
            </div>
        </div>
    </div>

    @include('layout.botnavbar')

    @yield("content")

    {{-- Font Awesome --}}
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy"
        crossorigin="anonymous"></script>
    {{-- Footer --}}
    @include("layout.footer")

    {{-- Compiled app.js file --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
@vite(['resources/js/app.js'])



@include('layouts.head')


@livewireStyles




<body>

    @include('layouts.owner_sidebar')




    <main class="dashboard-main">


        @yield('content')


    </main>




    @yield('js')
    @livewireScripts







</body>

</html>

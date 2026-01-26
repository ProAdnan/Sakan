<!DOCTYPE html>
<html lang="en">
@vite(['resources/js/app.js'])


@include('layouts.head')



@livewireStyles




<body @yield('class')>


    @include('layouts.header')




    <main class="">

        @yield('content')

    </main>




    @include('layouts.footer')



    @yield('js')
    @livewireScripts

</body>

</html>

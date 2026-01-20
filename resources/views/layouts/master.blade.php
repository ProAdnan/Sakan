<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body @yield('class')>


    @include('layout.header')




    <main class="">

        @yield('content')

    </main>




    @include('layout.footer')



    @yield('js')

</body>

</html>

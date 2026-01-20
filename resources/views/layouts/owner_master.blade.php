<!DOCTYPE html>
<html lang="en">


@include('layout.head')

<body>

    @include('layout.owner_sidebar')




    <main class="dashboard-main">


        @yield('content')


    </main>




    @yield('js')

</body>

</html>

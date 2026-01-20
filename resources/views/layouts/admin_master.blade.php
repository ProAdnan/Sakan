<!DOCTYPE html>
<html lang="en">


@include('layout.head')

<body>

    @include('layout.admin_sidebar')




    <main class="dashboard-main">


        @yield('content')


    </main>




    @yield('js')

</body>

</html>

<!DOCTYPE html>
<html lang="en">


@include('layouts.head')

<body>

    @include('layouts.owner_sidebar')




    <main class="dashboard-main">


        @yield('content')


    </main>




    @yield('js')

</body>

</html>

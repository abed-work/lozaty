<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
</head>
<body>

    <div class="mobile-menu-icon">
        <i class="fas fa-bars"></i>
    </div>

    <div class="admin">
        <div class="side-bar">
            <div class="admin-head">
                <div class="admin-icon"><i class="fas fa-user-shield"></i></div>
                <div class="admin-email">admin@lozaty.com</div>
            </div>
            <ul>
                <li><a href="{{route('dashboard.videos.index')}}"> <span class="icon"><i class="far fa-clone"></i></span> <span>Videos</span></a></li>
                <li><a href="{{route('dashboard.discover-lozaty.index')}}"> <span class="icon"><i class="far fa-clone"></i> </span> <span>Discover Lozaty</span></a></li>
                <li><a href="{{route('dashboard.global-presence.index')}}"> <span class="icon"><i class="far fa-clone"></i></span> <span>Global Presence</span></a></li>
                <form action="{{route('dashboard.logout')}}" method="POST">
                    @csrf
                    <div class="logout">
                        <i class="fas fa-sign-out-alt"></i><input type="submit" value="Logout">
                    </div>
                </form>
            </ul>
        </div>
        <div class="main-content">
            @yield('body')
        </div>
    </div>

    <script>
        $(document).ready(function(){

            $(".chosen-select").chosen({
                no_results_text: "Oops, nothing found!"
            });

            $('#images').change(function(){
                $("#frames").html('');
                for (var i = 0; i < $(this)[0].files.length; i++) {
                    $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
                }
            });

            $('#images1').change(function(){
                $("#frames1").html('');
                for (var i = 0; i < $(this)[0].files.length; i++) {
                    $("#frames1").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
                }
            });

            $('.mobile-menu-icon').click(function(){
                $('.side-bar').toggleClass('active-menu');
                $('.mobile-menu-icon i').toggleClass('w-color');
            });

        });
    </script>
</body>
</html>
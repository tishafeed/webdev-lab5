<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">.
        <title>Nordic: @yield('title')</title>
        <meta name="description" content="Контернерна сторінка Nordic">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <link rel="icon" type="image/svg+xml" href="favicon.svg">
        <link rel="icon" type="image/png" href="favicon.png">
    </head>
    <body>
        <div class="header" id="header">
            <img class="sidenav-button" onclick="open_sidenav()" src="common/O_helmet_pierced_navmenu.svg">
            <img class="nordic-title" id="nordic_title" src="common/nordic2.svg">
        </div>
        <div id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="close-button" onclick="close_sidenav()">&times;</a>
            <a href="#">Головна</a>
            <a href="#">Історія</a>
            <a href="#">Міфи і релігія</a>
            <a href="#">Популярна культура</a>
        </div>
        @yield('content')

        <script>
            function hide_nordic_title() {
                document.getElementById("sidenav").appendChild(document.getElementById("nordic_title"))

            }

            function show_nordic_title(){
                document.getElementById("header").appendChild(document.getElementById("nordic_title"));
            }


            function handlePhoneChange(e) {
                if (e.matches) {
                    hide_nordic_title();
                } else {
                    show_nordic_title();
                }
            }
            var mediaQuery = window.matchMedia("(max-width: 700px)");
            //var mediaQuery2 = window.matchMedia("(min-width: 700px)");
            handlePhoneChange(mediaQuery);
            //handlePhoneChange(mediaQuery2);
            mediaQuery.addListener(handlePhoneChange);
            //mediaQuery2.addListener(handlePhoneChange);

            function open_sidenav() {
                if (screen.width > 450) {
                    document.getElementById("sidenav").style.width = "450px";
                } else if (screen.width > 350) {
                    document.getElementById("sidenav").style.width = "350px";
                } else if (screen.width > 250) {
                    document.getElementById("sidenav").style.width = "250px";
                }
            }

            function close_sidenav() {
                document.getElementById("sidenav").style.width = "0px";
            }
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>

<style>
    * {
        margin: 0;
    }
</style>

<body>

    <header>
        <nav style="display : flex ; justify-content: space-around; background-color : #f1f1f1">
            <div style="display : flex ; justify-content: space-evenly; align-items: center;">
                <img style="width : 5%" src="{{ asset("images/logo-ecole.png") }}" alt="">
                <a href="{{ route('home') }}"
                    style="color : black ; text-decoration : none ; font-size: large;">Accueil</a>
                <a href="{{ route('presentation') }}"
                    style="color : black ; text-decoration : none ; font-size: large;">presentation</a>
                <a href="{{ route('result') }}"
                    style="color : black ; text-decoration : none ; font-size: large;">Resultat</a>
                <a href="{{ route('contact') }}"
                    style="color : black ; text-decoration : none ; font-size: large;">Contact</a>
            </div>
            <div style="display : flex ; justify-content: space-evenly; align-items: center;">
                <input style="
                padding : 5px 15px; 
                border-radius: 8px; 
                outline: none;
                margin : 0 35px;
                "
                 type="text" placeholder="Search">
                <input 
                style="padding : 5px 15px ;
                font-size : 15px;
                font-width : 
                "
                
                type="submit" value="Recherche">
            </div>
        </nav>
    </header>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    <footer style="text-align : center ; background-color: #f2f2f2 ; padding: 20px 10px;">
        <div style="display : flex ; justify-content: space-around;">
            <ul style="list-style-type: none; display : flex ; flex-direction: column ; align-items: baseline;">
                <li> <a href="{{ route('home') }}"
                        style="color : blue ; text-decoration : none ; font-size: large;">Accueil</a>
                </li>
                <li> <a href="{{ route('presentation') }}"
                        style="color : blue ; text-decoration : none ; font-size: large;">presentation</a>
                </li>
                <li> <a href="{{ route('result') }}"
                        style="color : blue ; text-decoration : none ; font-size: large;">Resultat</a></li>
                <li> <a href="{{ route('contact') }}"
                        style="color : blue ; text-decoration : none ; font-size: large;">Contact</a></li>
            </ul>
            <ul style="list-style-type: none; display : flex ; flex-direction: column ; align-items: baseline;">
                <li>Telephone : 0454545454</li>
                <li>Adresse : Anfa</li>
            </ul>
        </div>
        <div>
            <p>Copyright &copy; 2026</p>
        </div>
    </footer>

</body>

</html>
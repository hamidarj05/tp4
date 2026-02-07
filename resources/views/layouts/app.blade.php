<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
  
    <header> 
        <nav>
            <a href="/">Accueil</a> 
        </nav>
    </header>

    <hr>
 
    <main>
        @yield('content')
    </main>

    <hr>
 
    <footer>
        <p>© 2026 - Laravel</p>
    </footer>

</body>
</html>

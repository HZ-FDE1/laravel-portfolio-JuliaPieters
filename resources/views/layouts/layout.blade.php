<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <meta http-equiv="X-UA-Compatible" content="ïe=edge">
    <meta name="author" content="Julia Pieters">
    <meta name="keywords" content="waarom deze studie? home pagina">
    <meta name="description" content="home pagina">
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body style="background-color: rgb(85, 150, 127)">

<div class="zijkant">

    <nav>
        <ul>
            <li class="{{Request::path()=== '/' ? 'current_page_item' : ''}}"><a href="./">Home</a></li>
            <li class="{{Request::path()=== 'forms' ? 'current_page_item' : ''}}"><a href="./forms">Form</a></li>

        </ul>

    </nav>


    <p class="tekst-zijkant">
        <a class="link-school" target="_blank"
           href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
           alt="HZ pagina">HZ
            pagina </a>
    </p>

    <p class="tekst-zijkant">
        <a class="link-school" target="_blank" href="https://learn.hz.nl/" alt="learn"> HZ Learn</a>
    </p>

    <p class="tekst-zijkant">

        <a class="link-school" target="_blank" href="https://www.microsoft.com/nl-nl/microsoft-teams/log-in"
           alt="teams">Teams</a>
    </p>

    <p class="tekst-zijkant">
        <a class="link-school" target="_blank" href="https://portal.hz.nl/" alt="Study Portal">Study Portal</a>
    </p>
    <p class="tekst-zijkant">
        <a class="link-school" target="_blank"
           href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf"
           alt="Regeling en documenten">Regeling en documenten</a>
    </p>

    <p class="tekst-zijkant">
        <a class="link-school" target="_blank" href="https://github.com/HZ-HBO-ICT" alt="github">Github</a>

    <div class="imghz">
        <img src="https://vmh-hbo.nl/wp-content/uploads/2018/06/hz-logo.jpg" alt="hz logo" width="50"
             height="50" margin-right: 20%>
    </div>
    <br>

    <img class="foto-logo" src="/IMG/IMG_4055.jpg" alt="jp logo" width="50" height="50" margin-right: 20%>

</div>
<body>
@yield('content')
</body>


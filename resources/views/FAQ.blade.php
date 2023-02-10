<DOCTYPE= html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <meta http-equiv="X-UA-Compatible" content="ïe=edge">
    <meta name="author" content="Julia Pieters">
    <meta name="keywords" content="vragen en antwoorden">
    <meta name="description" content="de faq">
    <link rel="stylesheet" href="CSS/style.css">
</head>


<div class="zijkant">



    <body style="background-color: rgb(85, 150, 124)">



    <nav>
        <div class="nav">


            <a href="./">Home</a>

            <a href="./profile">Profile</a>

            <a href="./dashboard"> Dashboard</a>

            <a class="font" href="./faq">FAQ</a>

            <a href="./blog">Blog</a>
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

    <img class="foto-logo" src="IMG/IMG_4055.jpg" alt="jp logo" width="50" height="50" margin-right: 20%>


</div>

</div>

<hr>

<body>

<h1>FAQ</h1>

<hr>

    @foreach($faqs as $faq)
        <h2>{{ $faq->question }}</h2>
        <h4>{{ $faq->answer }}</h4>
    @endforeach

    <img class="foto-faq"
         src="https://st2.depositphotos.com/2495409/7863/i/450/depositphotos_78637522-stockafbeelding-vraagteken.jpg" alt="fotofaq">

</body>

</html>

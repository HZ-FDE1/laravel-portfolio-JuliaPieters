@extends('layout')
@section('content')

<hr>

<body>
<h1>DASHBOARD</h1>
<hr>

<style>
    table,
    tr,
    th,
    td {
        border: 2px solid white;
        border-collapse: collapse;
        width: 1000px;
        text-align: center;
        margin-left: 20%;
        margin-right: 50%;
        margin: bottom 80%;
        margin-top: 5%;

    }
</style>

</table>

<table>
    <tr>
        <th>Blok</th>
        <th>Cursus</th>
        <th>EC</th>
        <th>Toets</th>
        <th>Cijfer</th>
    </tr>
    <tr>
        <td rowspan="3">1</td>
        <td>Program & Career Orientation</td>
        <td>2,5</td>
        <td>Assessment</td>
        <td></td>
    </tr>
    <tr>
        <td>Computer Science Basics</td>
        <td>5</td>
        <td>Written Exam</td>
        <td></td>
    </tr>
    <tr>
        <td>Programming Basics</td>
        <td>5</td>
        <td>Case Study Exam</td>
        <td></td>
    </tr>

    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Object Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>Case Study (50%)</td>
        <td rowspan="2"></td>
    </tr>

    <tr>
        <td>Project (50%)</td>
    </tr>

    <tr>
        <td rowspan="4">3</td>
        <td>Framework Development 1</td>
        <td>5</td>
        <td>Case Study</td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="3">Framework Project 1</td>
        <td rowspan="3">7,5</td>
        <td>Project (33%)</td>
        <td rowspan="3"></td>
    </tr>

    <tr>
        <td>Case Study Exam (33%)</td>
    </tr>

    <tr>
        <td>Report (33%)</td>
    </tr>

    <tr>
        <td rowspan="4">4</td>
        <td rowspan="4">Framework Project 2</td>
        <td rowspan="4">10</td>
        <td>Portfolio (50%)</td>
        <td rowspan="4"></td>
    </tr>
    <tr>

    <tr>
        <td>Project (25%)</td>
    </tr>

    <tr>
        <td>Assessment (25%)</td>
    </tr>

    <tr>
        <td rowspan="1">Het hele jaar</td>
        <td>PPD</td>
        <td>12.5</td>
        <td>Portfolio</td>
        <td></td>
    </tr>

    <tr>
        <td rowspan="2">Wanneer ik wil</td>
        <td>Personality 1</td>
        <td>1,25</td>
        <td>Portfolio</td>
    </tr>
    <tr>
        <td>Personality 2</td>
        <td>1,25</td>
        <td>Portfolio</td>
        <td></td>
    </tr>
</table>

<hr>

<h3> 60 EC</h3>
<p> Je hebt 60 EC nodig voor een propedeuse diploma</p>

<h3> Boven 45 EC</h3>
<p> Je mag naar jaar 2, wel moet je de overige EC inhalen</p>

<h3> Onder 45 EC</h3>
<p> Je hebt het jaar niet gehaald en je krijgt een NBSA. Dit wil je niet! </p>

<h1>Mijn Progressie</h1>
<p>percentage EC</p>
<div class="container">

</div>



</body>

</html
@endsection

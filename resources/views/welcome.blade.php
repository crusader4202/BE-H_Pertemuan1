<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/index.css')}}">
    <title>Pertemuan 1</title>
</head>
<style>
    h2{
        color:crimson;
    }
</style>
<body>
    {{-- Headings inline css position  --}}
    <h1 style="color: blue; position: fixed">Hello, World!</h1>
    <h2>Hello, World!</h2>
    <h3>Hello, World!</h3>

    {{-- Break --}}
    <br>

    {{-- Line --}}
    <hr>

    {{-- Paragraph --}}
    <p>lorem ipsum dolor sit amet, consectetur adip</p>

    {{-- Hyperlink --}}
    <a href="https://www.google.com/">Google</a>

    {{-- Image --}}
    <img src="{{asset('laravel.png')}}"><br>

    {{-- Input --}}
    <label for="inputn">Your name</label><br>
    <input type="text" placeholder="your name" id="inputn"><br>

    <label for="inputp">Your password</label><br>
    <input type="password" placeholder="your password" id="inputp"><br>

    <input type="radio" id="html" name="fav_language">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="fav_language">
    <label for="javascript">JavaScript</label><br>

    <input type="checkbox" id="html-c" name="fav_language">
    <label for="html-c">HTML</label><br>
    <input type="checkbox" id="css-c" name="fav_language">
    <label for="css-c">CSS</label><br>
    <input type="checkbox" id="javascript-c" name="fav_language">
    <label for="javascript-c">JavaScript</label><br>

    {{-- Buttons --}}
    <a href="https://www.google.com/"><button type="button">Google</button></a>

    {{-- table --}}
    <table>
        <tr>
            <th>Saturn</th>
            <th>Saturn</th>
            <th>Saturn</th>
        </tr>
        <tr>
            <td>Saturn</td>
            <td>Saturn</td>
            <td>Saturn</td>
        </tr>
        <tr>
            <td>Saturn</td>
            <td>Saturn</td>
            <td>Saturn</td>
        </tr>
        <tr>
            <td>Saturn</td>
            <td>Saturn</td>
            <td>Saturn</td>
        </tr>
    </table>


    {{-- Section and div --}}
    <section></section>
    <div class="container">
        <h1>Hello, World!</h1>
        <h1>Hello, World!</h1>
        <h1>Hello, World!</h1>
    </div>
</body>
</html>

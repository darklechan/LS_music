<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">

    body {
      background-image: url("/images/metal.jpg");
      background-color: black;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      height: 700px;
    }

    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left 0;
      background-color: black;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: aquamarine;
      display: block;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .sidenav a:hover {
      color: beige;
    }

    .main_content {
      margin-left: 160px;
      font-size: 18px;
      padding: 0px 10px;
      font-family: 'Courier New', Courier, monospace;
      text-align: center;
    }

    .main_content p {
      /* text-shadow: 0px 0px 8px black; */
      color: white;
      font-size: 25px;
      font-weight: bold;
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: black;
    }

    .main_content h1 {
      /* text-shadow: 0px 0px 8px black; */
      color: black;
      font-size: 40px;
      font-weight: bold;
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: white;
    }

    .table_content{
      font-family: 'Courier New', Courier, monospace;    
    }

    table {
      border-collapse: collapse;
      text-align: center;
      margin-left: 500px;
      margin-right: auto;
      width: 50%;
    }

    td, th {
      color: rgb(8, 8, 8);
      border-bottom: 1px solid black;
      background-color: rgb(165, 164, 164);
    }

    th {
      background-color: black;
      color: white;
    }

    .addsong {
      width: 200px;
      padding: 20px;
      margin-top: 0;
      margin-right: auto;
      margin-bottom: 0;
      margin-left: auto;

    }

    input {
      padding: 5px;
      border-radius: 5px;
      box-shadow: 0 0 15px 4px rgb(0, 0, 0, 0.06);
    }

    input[type=submit] {
      margin-top: 10px;
      color: white;
      background-color: rgb(8, 8, 8);
    }

    .footer {
      position: fixed;
      width: 100%;
      bottom: 0;
      left: 0;
      background-color: black;
      color: white;
    }

    .footer p {
      text-align: center;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 15px;}
    }



    </style>

</head>

<body>

  <div class="sidenav">
    <ul>
      <li><a href="/home">Home</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/add">Add song</a></li>
      <li><a href="/update">Update</a></li>
    </ul>
  </div>

  <div class="main_content">
    @yield('content')
  </div>
  
  <div class="table_content">
    @yield('table')
  </div>

  <div class="footer">
      <p>Creado por Valeria Escalante. 2020</p>
  </div>

</body>
</html>
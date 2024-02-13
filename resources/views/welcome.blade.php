<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="{{ asset('css/welcome.css') }}">



    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <div class="hero container-fluid7"
        style="width:100%;
min-height: 80vh;
display:flex;
align-items:center;
padding-top:80px;
background-image:url('gambar/bg.png');
background-repeat:no-repeat;">
        @include('navbar')

        <div class="container">
            <div class="box-hero"
                style="display:grid; 
         grid-template-columns: repeat(2,1fr);
          grid-template-rows: 1fr;  
          column-gap: 80px;">

                <div class="box"
                    style="color: white;
             font-size:3vw;
              line-height:1.3;
              margin-bottom:20px;
               font-family: 'Protest Strike', sans-serif;">

                    <h1>Tumpukan buku <br> takkan menghianati masa depanmu</h1>
                    <a style="width: 100px; " type="button" class="btn-sm btn btn-warning text-light"
                        href="/">Selengkapnya</a>
                </div>


            </div>


        </div>
    </div>


    <div class="text2 ">
        <center>
            <h1>Fitur</h1>
            <h5>beberapa fitur yg ada di aplikasi perpustakaan</h5>
        </center>
    </div>

    <div class="container2">
        <div class="card" id="box1">
            <div class="fitur-image">
                <img src="{{ asset('gambar/vector.png') }}" style="width: 50px;" alt="">
            </div>
            <div class="card-body">

            </div>
        </div>
        <div class="card" id="box1">
            <div class="fitur-image">
                <img src="{{ asset('gambar/coment.png') }}" style="width: 50px;" alt="">
            </div>
            <div class="judul1">

            </div>
        </div>
        <div class="card" id="box1">
            <div class="fitur-image">
                <img src="{{ asset('gambar/search.png') }}" style="width: 60px;" alt="">
            </div>
            <div class=" judul5">
                <h1>Shandy</h1>
            </div>
        </div>
    </div>

    <style>
        .judul5 {
            text-align: center;
            font-size: 5px;
        }

        .card .fitur-image {
            margin-right: 10px;
            margin-left: 30px;
            height: 150px;
            width: 150px;
        }

        .container2 card card-body {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container2 {
            display: flex;
            justify-content: space-between;
        }

        #box1 {
            width: 250px;
            height: 300px;
            border-radius: 20px;
            border: 1px solid #1d296f;
            margin-right: 100px;
            margin-left: 100px;
            margin-top: 100px;

            /* Jarak antar kotak */
        }

        .fitur-image {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            background-color: rgb(197, 190, 61);
            border-radius: 40px;
            padding-top: 15px;
            padding-bottom: 15px;
        }





        .text2 h1 {
            margin-top: 40px
        }

        .text2 h5 {
            font-size: 15px
        }

        .testimoni h1 {
            margin-top: 40px
        }

        .testimoni h5 {
            font-size: 15px;
        }

        .box2 {
            width: 200px;
            height: 300px;
            border-radius: 20px;
            border: 1px solid #ccc;

            margin-top: 20px;

            /* Jarak antar kotak */
        }

        .testimoni {
            margin-top: 80px;
        }

        .preview h1 {
            margin-top: 40px;
        }

        .preview h5 {
            font-size: 15px;
        }

        .fitur-image2 {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 40px;
            margin-top: 10px;
        }
    </style>

    <div class="testimoni">
        <center>
            <h1>
                Testimoni
            </h1>
            <h5>beberapa testimoni dari client kami</h5>
    </div>

    <div class="container3 d-flex justify-content-center">
        <div class="row ">
            <div class="col-3">
                <div class="box2">
                    <div class="fitur-image2">
                        <img src="{{ asset('gambar/testimoni1.png') }}" style="width: 120px; " alt="">
                    </div>
                    <div class="text2">
                        <h1>Shandy</h1>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="box2"></div>
            </div>
            <div class="col-3">
                <div class="box2"></div>
            </div>
            <div class="col-3">
                <div class="box2"></div>
            </div>
        </div>


    </div>

    <div class="preview">
        <center>
            <h1>Preview</h1>
            <h5>ini adalah gambaran ruangan perpustakaan kami</h5>
        </center>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blog/css/blog.css">
    <title>BLOG</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }

        body {
            background: url(../blog/img/fondo.jpg);
            background-repeat: none;
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
        }

        h3 {
            color: rgb(121, 151, 236);
            text-align: center;
        }

        h4 {
            color: #478fd3;
        }

        header {
            text-align: center;
        }

        .nav a {
            display: inline-block;
            font-size: 25px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-left: 400px;
            color: #fff;
        }

        .nav a:hover {
            padding: auto;
            border-radius: 5px;
            background-color: blue;
        }

        .carousel-item {
            width: 100px;
        }

        #ofertas {
            margin-left: 10px;
        }

        .container {
            padding: 15px 20px;
            background: #dbdbdbdb;
        }

        .informacion h2 {
            text-align: center;
        }

        p {
            font-family: 'Courier New', Courier, monospace;
        }

        footer {
            background: #fff;
        }

        .ir {
            margin-top: 15px;
            display: flex;
            justify-content: flex-end;
        }

        .ir a {
            padding: 7px 10px;
            background-color: #5488a3;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            transition: all 300ms ease;
        }

        .ir a:hover {
            background-color: orange;
        }

        .ofertas {
            text-align: center;
        }
        .card-img-top img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <?php include ('more/header.php'); ?>
    <br>
    <section class="container">
<center><h2>Informacion</h2></center>
        <section class="row ">
            
            <section class="col-md-5 col-sm-4 col-lg-5">
                <div class="informacion">
                    <br>
                    <center><div class="card" style="width: 18rem;"> 
                        <img src="../blog/img/acuariofilia.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Acuariofilia</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, a.</p>
                            <a href="../blog/acuariofilia.php" class="btn btn-primary">Ver</a>
                        </div>
                </div></center>
                <br><br>
                <center><div class="card" style="width: 18rem;"> 
                        <img src="../blog/img/suelo.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Suelos</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, placeat.</p>
                            <a href="../blog/suelo.php" class="btn btn-primary">Ver</a>
                    </div>
                </div></center>
                <br><br>
                <center><div class="card" style="width: 18rem;"> 
                        <img src="../blog/img/limpieza.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Limpieza</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, non.</p>
                            <a href="../blog/limpieza.php" class="btn btn-primary">Ver</a>
                    </div>
                </div></center>
                </div>
            </section>
            <section class="col-md-5 col-sm-4 col-lg-5">
                <div class="informacion">
                    <br>
                <center><div class="card" style="width: 18rem;"> 
                        <img src="../blog/img/plant.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Plantas</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, ut?</p>
                            <a href="../blog/planta.php" class="btn btn-primary">Ver</a>
                    </div>
                </div></center>
                <br><br>
                <center><div class="card" style="width: 18rem;"> 
                        <img src="../blog/img/escondite.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Escondites</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, minus.</p>
                            <a href="../blog/escondite.php" class="btn btn-primary">Ver</a>
                    </div>
                </div></center>
                </div>
            </section>

            <section class="col-md-2 col-sm-2 col-lg-2">
                <aside>
                    <div class="ofertas">
                        <img src="../blog/img/oferta.jfif" alt="" class="imag w-100">
                        <br><br>
                        <img src="../blog/img/gblanca2.jfif" alt="" class="img w-100 h-500">
                    </div>


                    <div class="ir"><a href="../product-details.php?pid=23">Ir a Comprar</a></div>

                </aside>
            </section>
        </section>
    </section>
    <br>

    <?php include ('more/footer.php'); ?>

</body>

</html>
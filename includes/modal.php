<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/modal.css">

    <title>Ventana modal</title>

<style>
body{
    background: #efefef;
}

.boton-modal{
    padding: 40px;
    background-color: #fff;
}

.boton-modal label{
    padding: 10px 15px;
    background-color: #5488a3;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: all 300ms ease;
}
.boton-modal label:hover{
    background-color: #185e83;
}

#btn-modal{
    display: none;
}
.container-modal{
    width: 100%;
    height: 100vh;
    position: fixed;
    top: o; left: 0;
    background-color: rgba(144, 148, 150, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 100;
}
.content-modal{
width: 100%;
max-width: 400px;
padding: 20px;
background-color: #fff;
border-radius: 4px;
}
.content-modal h2{
    margin-bottom: 15px;
    text-align: center;
}

.content-modal p{
    padding: 15px 0px;
    border-top: 1px solid #dbdbdb;
    border-bottom: 1px solid #dbdbdb;
}
.regresar{
    width: 100%;
    margin-top: 15px;
    display: flex;
    justify-content: flex-end;
}
.regresar a{
    padding: 7px 10px;
    background-color: #5488a3;
    list-style: none;
    text-decoration: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: all 300ms ease;
}
.regresar a:hover{
    background-color: orange;
}

.cerrar-modal{
    width: 100%;
    height: 100vh;
    padding: absolute;
    top: 0; left: 0;
    z-index: -1;
}



</style>

</head>

<body>
    

<input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            <h2>¡BIENVENIDOS!</h2>
            <p>
                ¿Quienes Somos?
                Acuario poseidon
                Nos apacionamos por tener un rincon natural en para que tu puedas criar, cuidar y evalocionar en este
                hobi, nosotros venimos a que tu te interenes en este hermoso hobi que es la acuariofilia
                No solo queremos darte un pedaso de vidrio, si no que en ese pedaso de espacio puedas tener un espacio
                donde puedas relajarte y con la pacion que generes
                puedan encursionarte mas en este hobi. 
<br>
<br>
                Con la acuariogilia te damos al alcance un hobi para que tu puedas: <br> <br>
                
                * Reduce el nivel de estrés. <br> <br>

                * Mejora la calidad del sueño. <br> <br>

                * Baja la presión arterial y el ritmo cardíaco. <br> <br>

                * Disminuyen el dolor y la ansiedad. <br> <br>

                * Mejora la concentración y la creatividad. <br> <br>

                * y tambien ayuda a los niños y pacientes con Alzheimer. 
            </p>
            <div class="regresar">
            <a href="../index.php">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>
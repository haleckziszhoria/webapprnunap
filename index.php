<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web App Redes Neuronales EPIS - UNAP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body, html{
           height:100%; 
        }
        .bg{
            background-image: url("imagenes/angelina.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>

</head>
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin:auto; background:white; padding:20px, box-shadow:10px 10px 5px #888">
                <div class="panel-heading">
                    <h2>
                        Web App Redes Neuronales EPIS - UNAP
                    </h2>
                    <p style="font-style: italic;">
                        Procesamiento de Imágenes usando la API de Google - Cloud vision
                    </p>
                    <hr>
                    <form action="check.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="image" accept="image/" class="form-control">
                        <br>
                        <button type="submit" style="border-radius:0px;" class="btn btn-lg btn-block btn-outline-success" >Analizar Imagen</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
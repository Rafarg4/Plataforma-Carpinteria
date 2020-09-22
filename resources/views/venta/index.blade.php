<<<<<<< HEAD
<h3>soy index del redteam</h3>

<div class="table-responsive">
    <table class="table" id="data-table">

            <tr>
                <th>Numero factura</th>
                <th>tipo</th>
            </tr>
    
     
        @foreach($ventas as $venta)
            <tr>
                <th>{{$venta->vent_numero}}</th>
                <th>{{$venta->vent_tipo}}</th>
            
            </tr>
        @endforeach
     
    </table>
</div>
=======
<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ventas">
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Pagina de Ventas</title>
</head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Formulario Ventas </h2>
                <div class="form-group row">
                    <p>
                        Venta Fecha: <input type="date" name="fechacita" min="2015-02-20" max="2030-12-31" step="7">
                    </p>
                    </form>
                    <form action="formget.php" method="get">
                            Numero de venta: <input type="text" name="numero de venta"><br>
                    </form>
                    <form action="formget.php" method="get">
                            Tipo de Venta: <input type="text" name="nombre"><br>
                    </form>
                    <form action="formget.php" method="get">
                            IVA <input type="text" name="nombre"><br>
                    </form>
                    <form action="formget.php" method="get">
                            Venta Total: <input type="text" name="nombre"><br>
                    </form>
                    <input type="submit" value="Enviar">
                </div>
    </div>
</body>
</html>
>>>>>>> 9314a1e566e8e31adb1db4f57133256318a9dd4b

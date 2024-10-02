<html>
<head>
    <title>IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-12">
                <h1>Calculadora de IMC</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso</label>
                        <input type="text" class="form-control" id="peso" name="peso">
                    </div>
                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura</label>
                        <input type="text" class="form-control" id="altura" name="altura">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
            </div>
        </div>
        <!-- calculo del IMC -->
        <div class="row my-5">
            <div class="col-12">
                <?php
                if (isset($_POST['peso']) && isset($_POST['altura'])) {
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $imc = $peso / ($altura * $altura);
                    echo "<h2>Tu IMC es $imc</h2>";
                    echo "<h3>Y tienes ... ";
                    switch ($imc) {
                        case ($imc < 18.5):
                            echo "Peso insuficiente";
                            break;
                        case ($imc >= 18.5 && $imc < 24.9):
                            echo "Peso normal";
                            break;
                        case ($imc >= 25 && $imc < 26.9):
                            echo "Sobrepeso grado I";
                            break;
                        case ($imc >= 27 && $imc < 29.9):
                            echo "Sobrepeso grado II (preobesidad)";
                            break;
                        case ($imc >= 30 && $imc < 34.9):
                            echo "Obesidad de tipo I";
                            break;
                        case ($imc >= 35 && $imc < 39.9):
                            echo "Obesidad de tipo II";
                            break;
                        case ($imc >= 40 && $imc < 49.9):
                            echo "Obesidad de tipo III (mórbida)";
                            break;
                        case ($imc >= 50):
                            echo "Obesidad de tipo IV (extrema)";
                            break;
                    }
                    echo "</h3>";
                } else {
                    echo "<h4>Introduce los valores de peso y altura para calcular el IMC</h4>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
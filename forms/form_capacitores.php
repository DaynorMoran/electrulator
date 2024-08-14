<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrulator - Bases</title>
    <!-- Añadir bootstrap 5 ↓ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/app.css">
</head>

<body class="bg-primary d-flex flex-column vh-100">

    <header class="bg-primary  sticky-top">
        <div class="container text-center">
            <h1 class="text-accent fuente-Bebas display-4">
                Electrulat<span>
                    <img src="../assets/img/foco.png" alt="O" style="height: 0.7em; vertical-align: middle;">
                </span>r
            </h1>
        </div>
    </header>
    <!-- fin header -->



    <div class="container pt-3">
        <div class="row">
            <div class="col-6">
                <img src="../assets/img/cap.png" class="img-fluid w-50 mx-auto d-block" alt="Imagen Responsive">
            </div>
            <div class="col-6">
                <div class="row">
                    <h1 class="text-start fw-bold fs-4 fuente-Abel text-accent">Valor:</h1>
                    <h1 class="text-start fw-bold fs-4 fuente-Abel text-secondary" id="resultado">100 pf</h1><span>
                    </span>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6 mb-3">
                <label for="valorInput" class="form-label fuente-Abel fs-5">Ingrese un valor:</label>
                <input type="text" class="form-control custom-border fuente-Abel" id="valor">
            </div>
            <div class="col-md-6 mb-3">
                <button type="button" class="btn btn-success mi-boton text-primary fuente-Bebas px-5" id="calcular"
                    onclick="calcularCapacitor()">Calcular</button>
            </div>
        </div>
    </div>



    <div class="container mb-3">
        <div class="row">
            <div class="col-md-6">
                <h2 class="fuente-Abel fs-5 text-accent">Tensión:</h2>
                <select class="form-select custom-border fuente-Abel" id="tensionMaxima">
                    <option value="0G">0G (4VDC)</option>
                    <option value="0L">0L (5.5VDC)</option>
                    <option value="0J">0J (6.3VDC)</option>
                    <option value="1A">1A (10VDC)</option>
                    <option value="1C">1C (16VDC)</option>
                    <option value="1E">1E (25VDC)</option>
                    <option value="1H">1H (50VDC)</option>
                    <option value="1J">1J (63VDC)</option>
                    <option value="1K">1K (80VDC)</option>
                    <option value="2A" selected>2A (100VDC)</option>
                    <option value="2Q">2Q (110VDC)</option>
                    <option value="2B">2B (125VDC)</option>
                    <option value="2C">2C (160VDC)</option>
                    <option value="2Z">2Z (180VDC)</option>
                    <option value="2D">2D (200VDC)</option>
                    <option value="2P">2P (220VDC)</option>
                    <option value="2E">2E (250VDC)</option>
                    <option value="2F">2F (315VDC)</option>
                    <option value="2V">2V (350VDC)</option>
                    <option value="2G">2G (400VDC)</option>
                    <option value="2W">2W (450VDC)</option>
                    <option value="2H">2H (500VDC)</option>
                    <option value="2J">2J (630VDC)</option>
                    <option value="3A">3A (1000VDC)</option>
                </select>
            </div>
            <div class="col-md-6">
                <h2 class="fuente-Abel fs-5 text-accent">Tolerancia:</h2>
                <select class="form-select custom-border fuente-Abel" id="tolerancia">
                    <option value="B">B (+/- 0.10pF)</option>
                    <option value="C">C (+/- 0.25pF)</option>
                    <option value="D">D (+/- 0.50pF)</option>
                    <option value="E">E (+/- 0.5%)</option>
                    <option value="F">F (+/- 1%)</option>
                    <option value="G">G (+/- 2%)</option>
                    <option value="H">H (+/- 3%)</option>
                    <option value="J" selected>J (+/- 5%)</option>
                    <option value="K">K (+/- 10%)</option>
                    <option value="M">M (+/- 20%)</option>
                    <option value="N">N (+/- 30%)</option>
                    <option value="P">P (+100% / -0%)</option>
                    <option value="Z">Z (+80% / -20%)</option>
                </select>
            </div>
        </div>
    </div>







    <footer class="bg-secondary text-white py-2 mt-5 mt-auto">
        <div class="container text-center">
            <p class="fuente-Abel small text-primary fw-bold">2024</p>
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="text-primary fuente-Abel">"❤️La educación es el arma más poderosa que puedes usar para cambiar el mundo."
                            - Nelson Mandela</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end mb-3 mb-md-0">
                        <button class="btn btn-dark">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0.296997C5.37 0.296997 0 5.67 0 12.297C0 17.6 3.438 22.097 8.205 23.682C8.805 23.795 9.025 23.424 9.025 23.105C9.025 22.82 9.015 22.065 9.01 21.065C5.672 21.789 4.968 19.455 4.968 19.455C4.422 18.07 3.633 17.7 3.633 17.7C2.546 16.956 3.717 16.971 3.717 16.971C4.922 17.055 5.555 18.207 5.555 18.207C6.625 20.042 8.364 19.512 9.05 19.205C9.158 18.429 9.467 17.9 9.81 17.6C7.145 17.3 4.344 16.268 4.344 11.67C4.344 10.36 4.809 9.29 5.579 8.45C5.444 8.147 5.039 6.927 5.684 5.274C5.684 5.274 6.689 4.952 8.984 6.504C9.944 6.237 10.964 6.105 11.984 6.099C13.004 6.105 14.024 6.237 14.984 6.504C17.264 4.952 18.269 5.274 18.269 5.274C18.914 6.927 18.509 8.147 18.389 8.45C19.154 9.29 19.619 10.36 19.619 11.67C19.619 16.28 16.814 17.295 14.144 17.59C14.564 17.95 14.954 18.686 14.954 19.81C14.954 21.416 14.939 22.706 14.939 23.096C14.939 23.411 15.149 23.786 15.764 23.666C20.565 22.092 24 17.592 24 12.297C24 5.67 18.627 0.296997 12 0.296997Z"
                                    fill="white"></path>
                            </svg>
                            <a class="quitar-linea" href="https://github.com/DaynorMoran" target="blank">
                                <span class="ms-3 text-accent ">Visitanos en GitHub</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script>
        function calcularCapacitor() {
            // Obtener código ingresado en el input
            var codigo = document.getElementById('valor').value;
            console.log("Código ingresado: " + codigo);

            // Obtener valor seleccionado de la lista de Tensión
            var tension = document.getElementById('tensionMaxima').value;
            tension = obtenerTension(tension);
            console.log("Tensión: " + tension);

            // Obtener valor seleccionado de la lista de Tolerancia
            var tolerancia = document.getElementById('tolerancia').value;
            tolerancia = obtenerTolerancia(tolerancia);
            console.log("Tolerancia: " + tolerancia);


            // Separar el último dígito
            var resultado = separarUltimoDigito(codigo);
            var valorBase = resultado.numero;
            var exponente = resultado.ultimoDigito;

            // Calcular el valor real del capacitor
            var valorEnPf = valorBase * Math.pow(10, exponente);
            console.log("Valor en pF: " + valorEnPf);

            
            // Mostrar resultados
            mostrarResultados(codigo, valorEnPf, tension, tolerancia);
        }

        function separarUltimoDigito(numero) {
            let ultimoDigito = numero % 10;
            let numeroSinUltimo = Math.floor(numero / 10);

            return {
                numero: numeroSinUltimo,
                ultimoDigito: ultimoDigito
            };
        }

        function mostrarResultados(codigo, valorEnPf, tension, tolerancia) {
            var resultadoDiv = document.getElementById('resultado');
            resultadoDiv.innerHTML = `
            <p>Código del capacitor: ${codigo}</p>
            <p>Capacitancia en pF: ${valorEnPf} pF</p>
            <p>Tensión máxima: ${tension}</p>
            <p>Tolerancia: ${tolerancia}</p>
        `;
        }

        function obtenerTolerancia(letra) {
            // Convertir la letra a mayúscula para manejar entradas en minúscula
            letra = letra.toUpperCase();

            switch (letra) {
                case 'B':
                    return '+/- 0.10pF';
                case 'C':
                    return '+/- 0.25pF';
                case 'D':
                    return '+/- 0.50pF';
                case 'E':
                    return '+/- 0.5%';
                case 'F':
                    return '+/- 1%';
                case 'G':
                    return '+/- 2%';
                case 'H':
                    return '+/- 3%';
                case 'J':
                    return '+/- 5%';
                case 'K':
                    return '+/- 10%';
                case 'M':
                    return '+/- 20%';
                case 'N':
                    return '+/- 30%';
                case 'P':
                    return '+100% / -0%';
                case 'Z':
                    return '+80% / -20%';
                default:
                    return 'Tolerancia no encontrada';
            }
        }

        function obtenerTension(codigo) {
            switch (codigo) {
                case '0G':
                    return '4VDC';
                case '0L':
                    return '5.5VDC';
                case '0J':
                    return '6.3VDC';
                case '1A':
                    return '10VDC';
                case '1C':
                    return '16VDC';
                case '1E':
                    return '25VDC';
                case '1H':
                    return '50VDC';
                case '1J':
                    return '63VDC';
                case '1K':
                    return '80VDC';
                case '2A':
                    return '100VDC';
                case '2Q':
                    return '110VDC';
                case '2B':
                    return '125VDC';
                case '2C':
                    return '160VDC';
                case '2Z':
                    return '180VDC';
                case '2D':
                    return '200VDC';
                case '2P':
                    return '220VDC';
                case '2E':
                    return '250VDC';
                case '2F':
                    return '315VDC';
                case '2V':
                    return '350VDC';
                case '2G':
                    return '400VDC';
                case '2W':
                    return '450VDC';
                case '2H':
                    return '500VDC';
                case '2J':
                    return '630VDC';
                case '3A':
                    return '1000VDC';
                default:
                    return 'Desconocido';
            }
        }

        // Ejemplo de uso:
        console.log(obtenerTension('1A')); // Devuelve '10VDC'
        console.log(obtenerTension('2J')); // Devuelve '630VDC'




    </script>

    <!-- agrego boootstrap 5 JS↓↓↓ -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
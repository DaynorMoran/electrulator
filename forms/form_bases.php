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

    <!-- Contenido principal -->
    <div class="container text-center">
        <h1 class="display-6 fuente-Abel text-secondary">Convertidor de Bases Numericas</h1>
        <form id="converterForm" class="align-items-center">
            <label class="fs-3 text-accent" for="baseType">Selecciona el tipo de numero:</label>
            <div class="row justify-content-center pt-3">
                <div class="col-md-6">
                    <select id="baseType" class="form-select form-select-lg fuente-Abel"
                        aria-label="Selecciona el tipo de base">
                        <option value="decimal">Decimal</option>
                        <option value="binary">Binario</option>
                        <option value="octal">Octal</option>
                        <option value="hexadecimal">Hexadecimal</option>
                    </select>
                </div>
            </div>

            <label for="inputNumber" class="fuente-Abel fs-2 fuente-Abel text-accent mt-2 ">Ingresa el numero:</label>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <input type="text" id="inputNumber" class="form-control custom-border fuente-Abel mt-2">
                    </div>
                </div>
            </div>

            <div class="pt-3">
                <button class="btn btn-success bg-accent fuente-Bebas text-primary px-5 my-2" type="button"
                    onclick="convertNumber()">CONVERTIR</button>
            </div>
        </form>

        <div id="result" class="fuente-Abel fs-4 text-secondary ">
            <p>Binario: <span id="binaryResult"></span></p>
            <p>Octal: <span id="octalResult"></span></p>
            <p>Decimal: <span id="decimalResult"></span></p>
            <p>Hexadecimal: <span id="hexadecimalResult"></span></p>
        </div>
    </div>


        <!-- boton flotante -->

        <div class="dropup position-fixed bottom-0 end-0 m-4">
        <button class="btn btn-primary rounded-circle bg-accent text-primary" type="button" id="dropupButton" data-bs-toggle="dropdown"
            aria-expanded="false" style="width: 50px; height: 50px;">
            <i class="bi bi-list"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end  bg-primary custom-border">
            <li>
                <a href="../index.html" class="text-center quitar-linea text-accent fuente-Abel">
                    <h1 class="fs-5">Inicio</h1>
                </a>
            </li>
            <hr class="text-accent">
            <li>
                <a href="../forms/form_resistencias.php" class="text-center quitar-linea text-accent fuente-Abel">
                    <h1 class="fs-5">Calcular resistencias</h1>
                </a>
            </li>
            <hr class="text-accent">
            <li >
                <a href="../forms/form_capacitores.php" class="text-center quitar-linea text-accent fuente-Abel">
                    <h1 class="fs-5">Calculadora Capacitores</h1>
                </a>
            </li>
            
        </ul>
    </div>

    <!-- boton flotante -->


    <footer class="bg-secondary text-white py-2 mt-5 mt-auto">
        <div class="container text-center">
            <p class="fuente-Abel small text-primary fw-bold">2024</p>
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="text-primary fuente-Abel">"❤️La educación es el arma más poderosa que puedes usar para
                            cambiar el mundo."
                            - Nelson Mandela</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end mb-3 mb-md-0">
                        <button class="button-git">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0.296997C5.37 0.296997 0 5.67 0 12.297C0 17.6 3.438 22.097 8.205 23.682C8.805 23.795 9.025 23.424 9.025 23.105C9.025 22.82 9.015 22.065 9.01 21.065C5.672 21.789 4.968 19.455 4.968 19.455C4.422 18.07 3.633 17.7 3.633 17.7C2.546 16.956 3.717 16.971 3.717 16.971C4.922 17.055 5.555 18.207 5.555 18.207C6.625 20.042 8.364 19.512 9.05 19.205C9.158 18.429 9.467 17.9 9.81 17.6C7.145 17.3 4.344 16.268 4.344 11.67C4.344 10.36 4.809 9.29 5.579 8.45C5.444 8.147 5.039 6.927 5.684 5.274C5.684 5.274 6.689 4.952 8.984 6.504C9.944 6.237 10.964 6.105 11.984 6.099C13.004 6.105 14.024 6.237 14.984 6.504C17.264 4.952 18.269 5.274 18.269 5.274C18.914 6.927 18.509 8.147 18.389 8.45C19.154 9.29 19.619 10.36 19.619 11.67C19.619 16.28 16.814 17.295 14.144 17.59C14.564 17.95 14.954 18.686 14.954 19.81C14.954 21.416 14.939 22.706 14.939 23.096C14.939 23.411 15.149 23.786 15.764 23.666C20.565 22.092 24 17.592 24 12.297C24 5.67 18.627 0.296997 12 0.296997Z"
                                    fill="white"></path>
                            </svg>
                            <a class="quitar-linea" href="https://github.com/DaynorMoran" target="blank">
                                <span class="ms-3 text-accent fw-light fuente-Abel">Visitanos en GitHub</span>
                            </a>
                        </button>
                    </div>
                </div>
                

            </div>
        </div>
    </footer>




    <script>
        function convertNumber() {
            const baseType = document.getElementById('baseType').value;
            const inputNumber = document.getElementById('inputNumber').value.trim();

            let decimalValue;

            // Convert to decimal first based on selected base type
            switch (baseType) {
                case 'binary':
                    decimalValue = parseInt(inputNumber, 2);
                    break;
                case 'octal':
                    decimalValue = parseInt(inputNumber, 8);
                    break;
                case 'decimal':
                    decimalValue = parseInt(inputNumber, 10);
                    break;
                case 'hexadecimal':
                    decimalValue = parseInt(inputNumber, 16);
                    break;
                default:
                    decimalValue = NaN;
            }

            // Check if conversion is valid
            if (isNaN(decimalValue)) {
                alert("POr favor Ingresa un numero valido para convertir.");
                return;
            }

            // Convert decimal value to other bases
            const binaryResult = decimalValue.toString(2);
            const octalResult = decimalValue.toString(8);
            const decimalResult = decimalValue.toString(10);
            const hexadecimalResult = decimalValue.toString(16).toUpperCase();

            // Display the results
            document.getElementById('binaryResult').innerText = binaryResult;
            document.getElementById('octalResult').innerText = octalResult;
            document.getElementById('decimalResult').innerText = decimalResult;
            document.getElementById('hexadecimalResult').innerText = hexadecimalResult;
        }



    </script>

    <!-- agrego boootstrap 5 JS↓↓↓ -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
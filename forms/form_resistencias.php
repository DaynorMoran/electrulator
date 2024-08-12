

<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrulator - Resistencias</title>
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
        <div class="col-md-6">
            <img src="../assets/img/res.png" class="img-fluid w-50 vh-50 mx-auto d-block" alt="Imagen Responsive">
        </div>
        <div class="col-md-6">
            <h1 class="text-center fw-bold fs-4 fuente-Abel text-accent">Resultado:</h1>
            <h1 class="text-center fw-bold display-4 fuente-Abel">Resultado:</h1>
            
        </div>
    </div>
</div>
    


<!-- empiezo radio buttons -->

<div class="container ">
    <h1 class="text-center fuente-Abel fs-5 fw-bold text-accent">Selecciona el color de la banda: </h1>

    <div class="row">
        <!-- Primera lista de radio buttons -->
        <div class="col-3 mb-4">
            <h3 class="text-center mb-3 fuente-Abel fs-5">Primera Banda</h3>
            <div class="radio-buttons">
                <input type="radio" name="color1" id="negro1" value="negro" />
                <label for="negro1"><span class="negro"></span></label>

                <input type="radio" name="color1" id="marron1" value="marron" />
                <label for="marron1"><span class="marron"></span></label>

                <input type="radio" name="color1" id="rojo1" value="rojo" />
                <label for="rojo1"><span class="rojo"></span></label>

                <input type="radio" name="color1" id="naranja1" value="naranja" />
                <label for="naranja1"><span class="naranja"></span></label>

                <input type="radio" name="color1" id="amarillo1" value="amarillo" />
                <label for="amarillo1"><span class="amarillo"></span></label>

                <input type="radio" name="color1" id="verde1" value="verde" />
                <label for="verde1"><span class="verde"></span></label>

                <input type="radio" name="color1" id="azul1" value="azul" />
                <label for="azul1"><span class="azul"></span></label>

                <input type="radio" name="color1" id="violeta1" value="violeta" />
                <label for="violeta1"><span class="violeta"></span></label>

                <input type="radio" name="color1" id="gris1" value="gris" />
                <label for="gris1"><span class="gris"></span></label>

                <input type="radio" name="color1" id="blanco1" value="blanco" />
                <label for="blanco1"><span class="blanco"></span></label>
            </div>
        </div>

        <!-- Segunda lista de radio buttons -->
        <div class="col-3 mb-4">
            <h3 class="text-center mb-3 fuente-Abel fs-5">Segunda Banda</h3>
            <div class="radio-buttons">
                <input type="radio" name="color2" id="negro2" value="negro" />
                <label for="negro2"><span class="negro"></span></label>

                <input type="radio" name="color2" id="marron2" value="marron" />
                <label for="marron2"><span class="marron"></span></label>

                <input type="radio" name="color2" id="rojo2" value="rojo" />
                <label for="rojo2"><span class="rojo"></span></label>

                <input type="radio" name="color2" id="naranja2" value="naranja" />
                <label for="naranja2"><span class="naranja"></span></label>

                <input type="radio" name="color2" id="amarillo2" value="amarillo" />
                <label for="amarillo2"><span class="amarillo"></span></label>

                <input type="radio" name="color2" id="verde2" value="verde" />
                <label for="verde2"><span class="verde"></span></label>

                <input type="radio" name="color2" id="azul2" value="azul" />
                <label for="azul2"><span class="azul"></span></label>

                <input type="radio" name="color2" id="violeta2" value="violeta" />
                <label for="violeta2"><span class="violeta"></span></label>

                <input type="radio" name="color2" id="gris2" value="gris" />
                <label for="gris2"><span class="gris"></span></label>

                <input type="radio" name="color2" id="blanco2" value="blanco" />
                <label for="blanco2"><span class="blanco"></span></label>
            </div>
        </div>

        <!-- Tercera lista de radio buttons -->
        <div class="col-3 mb-4">
            <h3 class="text-center mb-3 fuente-Abel fs-5">Tercera Banda</h3>
            <div class="radio-buttons">
                <input type="radio" name="color3" id="negro3" value="negro" />
                <label for="negro3"><span class="negro"></span></label>

                <input type="radio" name="color3" id="marron3" value="marron" />
                <label for="marron3"><span class="marron"></span></label>

                <input type="radio" name="color3" id="rojo3" value="rojo" />
                <label for="rojo3"><span class="rojo"></span></label>

                <input type="radio" name="color3" id="naranja3" value="naranja" />
                <label for="naranja3"><span class="naranja"></span></label>

                <input type="radio" name="color3" id="amarillo3" value="amarillo" />
                <label for="amarillo3"><span class="amarillo"></span></label>

                <input type="radio" name="color3" id="verde3" value="verde" />
                <label for="verde3"><span class="verde"></span></label>

                <input type="radio" name="color3" id="azul3" value="azul" />
                <label for="azul3"><span class="azul"></span></label>

                <input type="radio" name="color3" id="violeta3" value="violeta" />
                <label for="violeta3"><span class="violeta"></span></label>

                <input type="radio" name="color3" id="gris3" value="gris" />
                <label for="gris3"><span class="gris"></span></label>

                <input type="radio" name="color3" id="blanco3" value="blanco" />
                <label for="blanco3"><span class="blanco"></span></label>
                <input type="radio" name="color3" id="dorado3" value="dorado" />
                <label for="dorado3"><span class="dorado"></span></label>

                <input type="radio" name="color3" id="plateado3" value="plateado" />
                <label for="plateado3"><span class="plateado"></span></label>
            </div>
        </div>

        <!-- Cuarta lista de radio buttons (Tolerancia) -->
        <div class="col-3 mb-4">
            <h3 class="text-center mb-3 fuente-Abel fs-5">Banda de Tolerancia</h3>
            <div class="radio-buttons">
                <input type="radio" name="color4" id="marron4" value="marron" />
                <label for="marron4"><span class="marron"></span></label>

                <input type="radio" name="color4" id="rojo4" value="rojo" />
                <label for="rojo4"><span class="rojo"></span></label>

                

                <input type="radio" name="color4" id="dorado4" value="dorado" />
                <label for="dorado4"><span class="dorado"></span></label>

                <input type="radio" name="color4" id="plateado4" value="plateado" />
                <label for="plateado4"><span class="plateado"></span></label>
            </div>
        </div>
    </div>
</div>


<!-- fin radio butons -->






    <footer class="bg-secondary text-white py-2 mt-5 mt-auto">
        <div class="container text-center">
            <p class="fuente-Abel small">2024</p>
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="small">"❤️La educación es el arma más poderosa que puedes usar para cambiar el mundo."
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
                            <span class="ms-2">Visitanos en GitHub</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- agrego boootstrap 5 JS↓↓↓ -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
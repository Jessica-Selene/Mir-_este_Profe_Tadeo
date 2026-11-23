<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temario no disponible - E.E.T N°3 Luis C. Candelaria</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Orbitron:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .not-found-section {
            min-height: calc(100vh - 200px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }

        .not-found-card {
            max-width: 520px;
            width: 100%;
            text-align: center;
            padding: 48px 36px;
            background: linear-gradient(145deg, rgba(16, 23, 34, .97), rgba(24, 34, 49, .95));
            border: 1px solid rgba(196, 154, 58, .5);
            border-radius: 20px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .25);
        }

        .not-found-card .not-found-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .not-found-card h1 {
            color: #f5f3ee;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.3rem, 3vw, 1.7rem);
            font-weight: 700;
            margin-bottom: 16px;
        }

        .not-found-card p {
            color: #a0aab8;
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 32px;
        }

        .btn-volver {
            display: inline-block;
            padding: 12px 28px;
            background: #c49a3a;
            color: #101722;
            font-family: "DM Sans", sans-serif;
            font-size: .95rem;
            font-weight: 700;
            border: none;
            border-radius: 999px;
            text-decoration: none;
            transition: background-color .25s ease, transform .25s ease;
        }

        .btn-volver:hover,
        .btn-volver:focus-visible {
            background: #ffd78e;
            color: #101722;
            transform: translateY(-2px);
        }

        @media (max-width: 575px) {
            .not-found-card {
                padding: 36px 24px;
            }
        }
    </style>
</head>

<body>

    

    <!-- CONTENIDO -->
    <main>
        <section class="not-found-section">
            <div class="not-found-card">
                <span class="not-found-icon" aria-hidden="true">📄</span>
                <h1>Temario no disponible</h1>
                <p>
                    Parece que no se ha subido digitalmente el temario.
                    Por favor apretá el botón volver al inicio para poder ver
                    otras materias o seguir explorando en la página.
                </p>
                <a href="../../../index.php" class="btn-volver">← Volver al inicio</a>
            </div>
        </section>
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>   
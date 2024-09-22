<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio - Desarrollador Junior</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #ffffff;
            margin: 0;
            padding: 0;
            transition: background-color 0.5s ease;
        }
        header {
            background-color: #2c2c2c;
            padding: 20px;
            text-align: center;
            animation: fadeIn 1s ease-in;
        }
        h1 {
            margin: 0;
        }
        nav {
            background-color: #333;
            padding: 10px;
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #555;
        }
        section {
            padding: 20px;
            margin: 20px;
            background-color: #2c2c2c;
            border-radius: 5px;
            animation: slideIn 0.5s ease-out;
        }
        .project {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #333;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }
        .project:hover {
            transform: scale(1.05);
        }
        .photo-container {
            width: 200px;
            height: 200px;
            border: 3px solid #ffffff;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
            position: relative;
            cursor: pointer;
        }
        .photo-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }
        .photo-container .photo-hover {
            opacity: 0;
        }
        .photo-container:hover .photo-initial {
            opacity: 0;
        }
        .photo-container:hover .photo-hover {
            opacity: 1;
        }
        #sobre-mi {
            text-align: center;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Tu Nombre</h1>
        <p>Desarrollador Junior</p>
    </header>
    
    <nav>
        <a href="#sobre-mi">Sobre Mí</a>
        <a href="#habilidades">Habilidades</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#contacto">Contacto</a>
    </nav>
    
    <section id="sobre-mi">
        <div class="photo-container">
            <img src="foto1.png" alt="" class="photo-initial">
            <img src="Foto3.png" alt="Tu foto al pasar el mouse" class="photo-hover">
        </div>
        <h2>Sobre Mí</h2>
        <p>Soy un desarrollador junior apasionado por crear soluciones web innovadoras. Me encanta aprender nuevas tecnologías y enfrentar desafíos creativos.</p>
    </section>
    
    <section id="habilidades">
        <h2>Habilidades</h2>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>JavaScript</li>
            <li>React</li>
            <li>Node.js</li>
        </ul>
    </section>
    
    <section id="proyectos">
        <h2>Proyectos</h2>
        <div class="project">
            <h3>Proyecto 1</h3>
            <p>Descripción breve del proyecto 1.</p>
        </div>
        <div class="project">
            <h3>Proyecto 2</h3>
            <p>Descripción breve del proyecto 2.</p>
        </div>
    </section>
    
    <section id="contacto">
        <h2>Contacto</h2>
        <p>Email: tu@email.com</p>
        <p>LinkedIn: linkedin.com/in/tu-perfil</p>
        <p>GitHub: github.com/tu-usuario</p>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Animación de desplazamiento suave
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Animación de cambio de color de fondo
            let colors = ['#1a1a1a', '#2c2c2c', '#333', '#444'];
            let currentIndex = 0;
            setInterval(() => {
                document.body.style.backgroundColor = colors[currentIndex];
                currentIndex = (currentIndex + 1) % colors.length;
            }, 5000);
        });
    </script>
</body>
</html>

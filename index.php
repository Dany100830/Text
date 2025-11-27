<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion & Inscription</title>
    <style>
        /* --- CSS --- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            width: 350px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* Boutons de bascule (Tabulation) */
        .toggle-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            background: #eee;
            border-radius: 30px;
            padding: 5px;
            position: relative;
        }

        .toggle-btn {
            background: transparent;
            border: none;
            outline: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 50%;
            font-weight: bold;
            color: #555;
            z-index: 1;
            transition: color 0.3s;
        }

        .toggle-btn.active {
            color: white;
        }

        /* L'arrière-plan coloré qui bouge */
        #btn-bg {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 50%; /* un peu moins pour le padding */
            height: 80%; /* Ajusté */
            background: linear-gradient(to right, #4facfe, #00f2fe);
            border-radius: 25px;
            transition: .4s;
            height: calc(100% - 10px);
            width: calc(50% - 5px);
        }

        /* Formulaires */
        .form-group {
            width: 100%;
            transition: opacity 0.4s ease-in-out;
        }

        .input-group {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Important pour le padding */
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background: #00f2fe;
        }

        /* Gestion de l'affichage */
        #login-form { display: none; }
        #register-form { display: block; }

        /* Alertes */
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 5px; text-align: center; font-size: 14px;}
        .error { background: #ffdddd; color: #a33; }
        .success { background: #ddffdd; color: #3a3; }

    </style>
</head>
<body>

<div class="container">

    <div class="toggle-buttons">
        <div id="btn-bg"></div>
        <button class="toggle-btn active" onclick="showRegister()">Inscription</button>
        <button class="toggle-btn" onclick="showLogin()">Connexion</button>
    </div>

    <form id="register-form" class="form-group" method="POST" action="">
        <div class="input-group">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit" name="register" class="submit-btn">S'inscrire</button>
    </form>

    <form id="login-form" class="form-group" method="POST" action="">
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit" name="login" class="submit-btn">Se connecter</button>
    </form>
</div>

<script>
    // --- JAVASCRIPT ---
    var x = document.getElementById("login-form");
    var y = document.getElementById("register-form");
    var z = document.getElementById("btn-bg");
    var btns = document.querySelectorAll('.toggle-btn');

    function showRegister() {
        x.style.display = "none";
        y.style.display = "block";
        z.style.left = "5px"; // Bouge le fond coloré à gauche
        
        btns[0].classList.add('active');
        btns[1].classList.remove('active');
    }

    function showLogin() {
        x.style.display = "block";
        y.style.display = "none";
        z.style.left = "50%"; // Bouge le fond coloré à droite
        
        btns[0].classList.remove('active');
        btns[1].classList.add('active');
    }
</script>

</body>
</html>
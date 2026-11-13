
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal do Aluno</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #dce8ff, #9bb9e8);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 750px;
            max-width: 90%;
            display: flex;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .lado-esquerdo {
            background: hsl(283, 84%, 27%);
            color: white;
            width: 40%;
            padding: 50px 25px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .lado-esquerdo h2 {
            font-size: 27px;
            margin-bottom: 15px;
        }

        .lado-esquerdo p {
            font-size: 17px;
            line-height: 1.5;
        }

        .lado-direito {
            width: 60%;
            padding: 50px 40px;
            text-align: center;
        }

        .lado-direito h1 {
            color: #69109c;
            margin-bottom: 10px;
        }

        .lado-direito p {
            color: #555;
            margin-bottom: 30px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            outline: none;
        }

        input:focus {
            border-color: #6b0c88;
        }

        button {
            width: 100%;
            padding: 15px;
            background: #6b0c88;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background: #6b0c88
            ;
        }

        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }

            .lado-esquerdo,
            .lado-direito {
                width: 100%;
                padding: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="lado-esquerdo">
            <h2>🎓 Portal do Aluno</h2>
            <p>Acesse sua conta para continuar.</p>
        </div>

        <div class="lado-direito">

            <h1>Login</h1>
            <p>Informe seus dados para entrar</p>

            <form action="validar.php" method="POST">

                <input type="text" name="cpf"
                placeholder="Digite seu CPF" required>

                <input type="password" name="senha"
                placeholder="Digite sua senha" required>

                <button type="submit">Entrar</button>

            </form>

        </div>

    </div>

</body>
</html>

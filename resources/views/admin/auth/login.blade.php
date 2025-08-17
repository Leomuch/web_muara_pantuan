<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #93d444, #184901);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn 1s ease-in-out;
        }

        .login-box {
            background: #ffffff;
            padding: 45px 35px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
            animation: slideUp 0.8s ease-out;
        }

        .login-box h2 {
            margin-bottom: 25px;
            text-align: center;
            font-weight: 700;
            color: #2e7d32;
            font-size: 26px;
        }

        .input-group {
            position: relative;
            margin-bottom: 22px;
        }

        .input-group i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #66bb6a;
            font-size: 16px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 16px 14px 42px;
            border: 1.8px solid #c8e6c9;
            border-radius: 10px;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 15px;
        }

        .input-group input:focus {
            border-color: #43a047;
            box-shadow: 0 0 6px rgba(67, 160, 71, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #43a047;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        button:hover {
            background: #1b5e20;
            transform: translateY(-2px);
        }

        .error-message {
            background: #f8d7da;
            color: #842029;
            padding: 10px 14px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 500px) {
            .login-box {
                padding: 35px 25px;
            }
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login Admin</h2>

        <!-- Tampilkan error kalau ada -->
        @if ($errors->any())
            <div class="error-message">
                <ul style="margin: 0; padding-left: 18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
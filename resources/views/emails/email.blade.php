<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Gest +</title>
     <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .mailbox-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mailbox {
            background-color: #fff;
            border: 2px solid #333;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mailbox-icon img {
            width: 80px;
            height: auto;
        }

        .mail-slot {
            width: 60px;
            height: 5px;
            background-color: #333;
            margin-top: 10px;
        }

        .additional-info {
            margin-top: 20px;
            text-align: center;
        }

        .additional-info p {
            color: #555;
        }

     </style>
</head>
<body>
    <div class="mailbox-container">
        <div class="additional-info">
            <p>
              <span>Nom : {{ $Name }}</span><br>
              <span>Téléphone : {{ $Phone}}</span><br>
              <span>Email : {{ $Email }}</span><br>
              <span>Tarif : {{ $Tarif }}</span><br>
              <span>Message : {{ $Msg }}</span>
            </p>
        </div>
    </div>
</body>
</html>

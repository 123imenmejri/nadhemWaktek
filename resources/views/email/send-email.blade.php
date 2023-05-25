<!DOCTYPE html>
<html>

<head>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .meeting-details {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        .meeting-details strong {
            font-weight: bold;
        }

        .button-container {
            margin-top: 30px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
        }

        .button:hover {
            background-color: #2779bd;
        }

        .signature {
            text-align: center;
            margin-top: 30px;
        }

        .signature img {
            width: 120px;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Nouveau réunion</h2>

        <p>Cher client,</p>

        <p>Nous vous invitons à une réunion le <br> {{ $start_date }}

        <div class="meeting-details">
            <strong>Titre réunion:</strong>
            {{ $name }}</p>
            <p><strong>Lien:</strong> {{ $lien }}</p>
            <p><strong>Durée:</strong> {{ $Durée }} minutes.</p>


            <div class="button-container">
                <p>La réunion suivante nécessite votre confirmation de disponibilité :</p>
                <a href="#" class="button">Oui</a>
                <a href="#" class="button">Non</a>
            </div>

            <p>Merci!</p>

            <div class="signature">
                <img src="logo.png" alt="Company Logo">
                <p>Company Name</p>
            </div>
        </div>
    </div>
</body>

</html>

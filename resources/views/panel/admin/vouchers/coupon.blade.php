<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css?v=1670420084">

    <style>
        body {
            font-family: Arial;
        }

        .coupon {
            border: 5px dotted #bbb;
            width: 80%;
            border-radius: 15px;
            margin: 0 auto;
            max-width: 600px;
        }

        .container {
            padding: 2px 16px;
            background-color: #f1f1f1;
        }

        .promo {
            background: #ccc;
            padding: 3px;
        }

        .expire {
            color: red;
        }
    </style>
</head>

<body>
    <div class="coupon">
        <div class="container">
            <img src="https://abadraho.com/assets/images/admin_logo.png" alt="Avatar"
                style="width:300px; margin-left:auto; margin-right:auto; display:block;">
        </div>
        <!-- <img src="/{{ $project_image }}" alt="Avatar" style="width:100%;"> -->
        <div class="container" style="background-color:white">
       
            <h2><b> {{ \App\Http\Controllers\FrontEnd\ProjectController::convertCurrency((int) $project_discount) }}
                    OFF on {{ $project_name }}</b></h2>
            <p>Username: {{ $user_name }}</p>
            <p>Email: {{ $user_email }}</p>
            <p>Phone: {{ $user_phone }}</p>
        </div>
        <div class="container">
            <p>Use Voucher Code: <span class="promo">{{ $voucher_code }}</span></p>
            <p class="expire">Expires: {{ $project_expiry }}</p>
        </div>
    </div>
    <br><br>
    <div class="coupon" style="border: none;">
        @if (!$isDownload)
            <a href="/projects/generate-voucher/{{ $project_id }}?download=1" class="download-now"
                style="background-color: #ec1c24; border: 2px solid #ec1c24; border-radius: 5px; color: #fff; text-align: center; vertical-align: middle; font-size: 1rem; line-height: 1.5; padding: 10px 30px;"
                data-toggle="modal" data-target="#myModal">Download Now</a>
        @endif
    </div>
</body>

</html>
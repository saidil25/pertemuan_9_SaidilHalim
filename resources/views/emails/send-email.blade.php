<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di {{ config('app.name') }}</title>
</head>
<body>
    <h1>Selamat Datang, {{ $data['name'] }}!</h1>

    <p>Terima kasih telah mendaftar di {{ config('app.name') }}. Berikut adalah detail informasi pendaftaran Anda:</p>

    <ul>
        <li><strong>Nama:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        
    </ul>

    <p>Terima kasih telah bergabung dengan kami!</p>

    <p>Terima kasih,<br>{{ config('app.name') }}</p>
</body>
</html>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>luckycat{{ isset($title) ? ' - ' . $title : '' }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<link rel="icon" href="{{ asset('assets/images/luckycat-letter.png') }}" type="image/x-icon">

@vite(['resources/css/app.css', 'resources/js/app.js'])

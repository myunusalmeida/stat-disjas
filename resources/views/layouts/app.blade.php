<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stat. Disjas - Impor Kaltim</title>
    <meta name="description" content="Tugas disjas">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100">
    <div class="font-sans text-gray-900 antialiased container mx-auto py-5">
        {{ $slot }}
    </div>
    @livewire('livewire-ui-modal')
</body>
@livewireScripts
<script src="{{ mix('js/livewire-handler.js') }}"></script>
@stack('scripts')

</html>

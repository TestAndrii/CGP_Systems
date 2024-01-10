<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>

    <div class="text-center">

        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <tr class="text-center">
                        <td colspan="2">
                            Top count images users
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <livewire:live-table />
                        </td>
                        <td>
                            <livewire:user-form />
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        </br><hr>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>

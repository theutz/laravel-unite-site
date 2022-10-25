<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Laravel Unité') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto p-8">
        <div class="prose mx-auto">
            <header>
                <h1>
                    {{ __('Laravel Unité') }}
                </h1>
                <p>
                    {{ __('A unified toolkit for working with units in Laravel.') }}
                </p>
            </header>
            <hr>
            <h2>Examples</h2>

            <table>
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([['500 g', 'oz'], ['200 ounces', 'grams']] as [$from, $to])
                        <tr>
                            <td>{{ $from }}</td>
                            <td>{{ $to }}</td>
                            <td>{{ Unite::convert($from)->to($to) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

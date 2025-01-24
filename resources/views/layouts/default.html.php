<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brickhouse</title>

        @js_include("app.js")
        @css_include("app.css")

        <!-- Fonts -->
        @css_include("https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap", preconnect: true)
    </head>

    <body class="w-full font-sans antialiased">
        <div class="min-w-full min-h-screen bg-white flex justify-center dark:bg-zinc-900">
            <main class="w-full max-w-2xl flex flex-col mx-auto px-6 lg:max-w-7xl lg:px-12">
                <slot />
            </main>
        </div>
    </body>
</html>
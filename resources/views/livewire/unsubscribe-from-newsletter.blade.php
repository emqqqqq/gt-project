<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ Vite::asset('resources/images/gt-logo.png') }}" type="image/png" />
        <title>GT | Unsubscribe</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                background-color: #f0f0f0;
            }
        </style>
    </head>
    <body>
        <div>
            <div style="display: flex;flex-direction:column;justify-content: center;align-items: center;">
                <div>
                    <img  src="{{ Vite::asset('resources/images/gt-logo.png')}}" width="50px">
                </div>
                <div style="width: 100%; max-width: 28rem; margin-top: 1.5rem; padding: 1.5rem; background-color: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; border-radius: 0.375rem;text-align:center;" >
                    <img  src="{{ Vite::asset('resources/images/envelope-unsubscribe.png')}}" width="460px">
                    <h1 style="font-weight: bold; font-size: 25px; margin-bottom: 20px;">You have unsubscribed</h1>
                    <p style="font-size: 1.125rem; margin-bottom: 20px;">We are sorry to see you go!</p>
                    <p style="font-size: 1.125rem;">If you change your mind and want to subscribe again, you can do so anytime.</p>
                </div>
            </div>
        </div>
    </body>
</html>
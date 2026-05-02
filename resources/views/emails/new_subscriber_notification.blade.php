<div style="text-align: center; background-color: #FFFFFF; border: 1px solid #E5E7EB; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); max-width: 500px; margin: 0 auto; padding: 20px;">
    <img  src="{{ Vite::asset('resources/images/gt-logo.png')}}" >
    <h1 style="font-weight: bold; font-size: 25px; margin-bottom: 20px;">🎉 Welcome to Our Newsletter!'</h1>
    <p style="font-size: 1.125rem; margin-bottom: 20px;">You are now officially part of our awesome newsletter community. 🚀</p>

    <p style="font-size: 1.125rem; margin-bottom: 20px;">Get ready for a journey filled with exciting updates, exclusive offers, and more!</p>
    <a href="{{ url('home') }}" style="font-weight: bold; font-size: 16px; color: #fff; background-color: #95CAA2; transition: all 0.3s ease-in-out; &:hover { background-color: #69A87C; }; border-radius: 999px; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; transition: all 0.3s ease-in-out;">Start Exploring!</a>

    <p style="font-size: 1.125rem; margin-top: 20px;">Thank you for using our application! If you wish to unsubscribe, <a href="{{ route('unsubscribe_from_newsletter', ['email' => $email]) }}" style="color: #69A87C; text-decoration: underline;">click here</a>.</p>
</div>
<div style="text-align: center; background-color: #FFFFFF; border: 1px solid #E5E7EB; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); max-width: 500px; margin: 0 auto; padding: 20px;">
    <img  src="{{ Vite::asset('resources/images/gt-logo.png')}}" >
    <h1 style="font-weight: bold; font-size: 25px; margin-bottom: 20px;">🌟 Your Daily Dose of Inspiration 🌟</h1>
    <p style="font-size: 1.25rem; font-style: italic;">{{ $quoteText }}</p>
    <p style="font-size: 1.125rem; margin-top: 10px;">- {{ $quoteAuthor }}</p>
    <p style="font-size: 1.125rem; margin-top: 20px;">Thank you for using our application! If you wish to unsubscribe, <a href="{{ route('unsubscribe_from_newsletter', ['email' => $email]) }}" style="color: #69A87C; text-decoration: underline;">click here</a>.</p>
</div>
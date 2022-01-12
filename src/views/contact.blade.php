<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <div>
        <h1>Contact Us</h1>
        
        <form method="POST" action="{{ route('contact') }}">
            @csrf
            <div class="row">
                <input type="text" name="name" placeholder="Name" />
                <br />
                <br />
                <input type="email" name="email" placeholder="Email" />
                <br />
                <br />
                <textarea name="message" cols="50" rows="5" placeholder="Message"></textarea>
                <br />
                <br />
                <button type="submit">Send</button>
            </div>
        </div>
    </div>    
</body>
</html>
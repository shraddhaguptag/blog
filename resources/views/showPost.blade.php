<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - My Creative Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
        }
        .container {
            width: 80%;
            max-width: 900px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .post-title {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .post-body {
            font-size: 1rem;
            line-height: 1.6;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #1a202c;
            text-decoration: none;
            font-weight: 600;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="post-title">{{ $post->title }}</h1>
        <p class="post-body">{{ $post->content }}</p>
        <h5 class="">{{ $post->created_at->format('F j, Y \a\t g:i A') }}</h5>
        <a href="{{ url('/') }}" class="back-link">Back to Home</a>
    </div>
</body>
</html>

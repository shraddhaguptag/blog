<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Blog Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            align-items: center;
        }
        header {
            background-color: #1a202c;
            color: white;
            padding: 15px 20px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            margin: 0 10px;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }
        nav a:hover {
            background-color: #4a5568;
            border-radius: 5px;
        }
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            width: 100%;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        .hero p {
            font-size: 1rem;
            margin-bottom: 30px;
        }
        .hero .cta-buttons a {
            color: #1a202c;
            background-color: white;
            text-decoration: none;
            padding: 12px 20px;
            margin: 0 5px;
            border-radius: 30px;
            font-weight: 700;
            transition: all 0.3s ease;
            display: inline-block;
            font-size: 0.9rem;
        }
        .hero .cta-buttons a:hover {
            background-color: #e2e8f0;
        }
        .features {
            display: flex;
            justify-content: space-around;
            margin: 50px 20px;
            text-align: center;
            width: 100%;
            flex-wrap: wrap;
        }
        .feature {
            max-width: 300px;
            margin: 20px 0;
        }
        .feature img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .feature h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        .feature p {
            font-size: 0.9rem;
        }
        footer {
            background-color: #2d3748;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
            position: relative;
            bottom: 0;
        }
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 15px;
            }
            nav {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
                margin-top: 10px;
            }
            nav a {
                margin: 5px 0;
                padding: 10px 0;
                width: 100%;
                text-align: left;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 0.9rem;
            }
            .hero .cta-buttons a {
                padding: 10px 18px;
                font-size: 0.85rem;
            }
            .features {
                flex-direction: column;
                align-items: center;
            }
            .feature {
                max-width: 100%;
            }
        }

         .posts {
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .post {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .post h2 {
            margin: 0 0 10px;
            font-size: 1.5rem;
        }
        .post a {
            text-decoration: none;
            color: #1a202c;
            font-weight: 600;
        }
        .post a:hover {
            text-decoration: underline;
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.2rem;
            }
            .hero h1 {
                font-size: 1.8rem;
            }
            .hero p {
                font-size: 0.8rem;
            }
            .hero .cta-buttons a {
                padding: 8px 16px;
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>My Creative Blog</h1>
        <nav>
            <a href="{{ route('login') }}">Log In</a>
            <a href="{{ route('register') }}">Sign Up</a>
            <a href="{{ route('posts.create') }}">Create Post</a>
        </nav>
    </header>

    <div class="hero">
        <h1>Share Your Story with the World</h1>
        <p>Join our community of bloggers and start sharing your experiences today.</p>
        <div class="cta-buttons">
            <a href="{{ route('register') }}">Get Started</a>
            <a href="{{ route('posts.create') }}">Write a Post</a>
        </div>
    </div>

    <section class="features">
        <div class="feature">
            <img src="https://via.placeholder.com/300" alt="Feature 1">
            <h3>Create Amazing Content</h3>
            <p>Our easy-to-use editor lets you create beautiful posts in no time.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/300" alt="Feature 2">
            <h3>Connect with Readers</h3>
            <p>Engage with a community of like-minded individuals.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/300" alt="Feature 3">
            <h3>Grow Your Audience</h3>
            <p>Share your stories and watch your audience grow.</p>
        </div>
    </section>

    <section class="posts">
        <h2>Recent Posts</h2>
        @foreach($posts as $post)
            <div class="post">
                <h2><a href="{{ route('showPost', $post->id) }}">{{ $post->title }}</a></h2>
                <p>{{ Str::limit($post->content, 500) }}</p>
            </div>
        @endforeach
    </section>

    <footer>
        <p>&copy; 2024 My Creative Blog. All rights reserved.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>404 Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #f8fafc;
      color: #22223b;
      font-family: 'Segoe UI', Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      text-align: center;
      padding: 2rem;
      border-radius: 12px;
      background: #fff;
      box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    }
    h1 {
      font-size: 5rem;
      margin: 0 0 1rem 0;
      color: #4f8ef7;
      letter-spacing: 2px;
    }
    h2 {
      font-size: 2rem;
      margin: 0 0 1rem 0;
    }
    p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      color: #555;
    }
    a.button {
      display: inline-block;
      padding: 0.75rem 2rem;
      background: #4f8ef7;
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.2s;
    }
    a.button:hover {
      background: #2563eb;
    }
    @media (max-width: 600px) {
      h1 { font-size: 3rem; }
      h2 { font-size: 1.2rem; }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <p>Sorry, the page you’re looking for doesn’t exist or has been moved.</p>
    <a href="/" class="button">Go Home</a>
  </div>
</body>
</html>
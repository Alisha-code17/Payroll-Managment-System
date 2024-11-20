<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Landing Page</title>
    
    <script>
        window.addEventListener("load", function() {
            document.body.classList.add("loaded");
        });
        window.addEventListener("load", function() {
            document.querySelectorAll(".content-item").forEach((item, index) => {
                setTimeout(() => item.classList.add("show"), index * 100);
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <!-- Left section (text) -->
        <div class="left-content">
            <h1>Payroll Management System</h1>
            <p>Welcome to the Payroll Management System. Our tool helps you easily calculate and manage employee salaries every month. With quick and accurate payroll processing, you can ensure that everyone is paid on time, without the hassle of manual calculations.</p>
            <a href="{{ route('login') }}" class="button">Get started</a>
        </div>

        <!-- Right section (image) -->
        <div class="right-content">
            <img src="{{ asset('images/img1.jpg') }}" alt="Illustration">
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon"
        href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0f1e5aad-05cf-4342-a2a3-6385559563dc/de8hzqj-45443592-d7d8-4a12-bed7-663747aa5d0c.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzBmMWU1YWFkLTA1Y2YtNDM0Mi1hMmEzLTYzODU1NTk1NjNkY1wvZGU4aHpxai00NTQ0MzU5Mi1kN2Q4LTRhMTItYmVkNy02NjM3NDdhYTVkMGMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.yZASIXfhf58g6J0TuMTlLFF7fmyCZf-XDWYoYaqm-kI">
</head>

<body style="background: #cbcbcb;">
    <header style="font-family: Arial, Helvetica, sans-serif">
        
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container fs-4 fw-semibold">
                <a class="navbar-brand" href="/home"><img
                        src="https://upload.wikimedia.org/wikipedia/en/5/5d/Genshin_Impact_logo.svg" alt="Genshin Logo"
                        width="150"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/region">Region</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <?php echo $__env->yieldContent('content'); ?>


    <h1 class="text-center p-md-3"
        style="font-size: 100px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        ~Coming Soon~</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\GenshinWeb\resources\views/template.blade.php ENDPATH**/ ?>
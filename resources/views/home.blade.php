<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngramu Djamoe</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Jost:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href="./css/output.css">

    {{-- Script --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>

<body class="bg-[#FFF3DE] font-playfair">
    {{-- Navbar Start --}}
    <nav
        class="bg-white p-4 shadow md:flex md:items-center md:shadow justify-around font-playfair text-dark text-[20px] sticky top-0 z-50 scroll-smooth md:scroll-auto">
        <div class="flex justify-between items-center ">
            <span class="cursor-pointer">
                <img class="h-16 inline" src="./assets/img/logo.png" alt="logo">
            </span>
            <span class="cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <ul
            class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-3 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px]transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="#hero"
                    class="text-[19px] text-dark hover:text-primary-default duration-500 active:text-primary-default">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-[19px] text-dark hover:text-primary-default">Products</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-[19px] text-dark hover:text-primary-default">About</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-[19px] text-dark hover:text-primary-default">Testimonies</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-[19px] text-dark hover:text-primary-default">Contact</a>
            </li>

            <button
                class="bg-[#a89165] text-white text-[19px] font-playfair duration-500 px-6 py-2 mx-4 ml-28 hover:bg-[#C3B288] rounded-2xl ">
                Sign in
            </button>
        </ul>
    </nav>
    {{-- Navbar End --}}
</body>

</html>

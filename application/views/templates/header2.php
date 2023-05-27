<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark1': '#2A140E',
                        'dark2': '#7B4D37',
                        'coksu': '#9C7659',
                        'light': '#D9D6D5',
                        'white': '#fff',
                        'slate': '#252525',
                        'yellow': '#facc15',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        handrawn: ['Delicious Handrawn', 'cursive'],
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-stone-950 font-poppins">
    <header class="z-10 top-0 fixed w-full backdrop-blur-xl bg-stone-950 bg-opacity-50 flex justify-between py-5 px-8 items-center shadow-md sm:px-20 md:px-10 lg:px-20">
        <div class="logo uppercase font-semibold text-white font-handrawn tracking-wider text-2xl md:text-3xl md:pr-20">cf<span class="text-dark1 drop-shadow-[0_0_1px_#D9D6D5] text-lg md:text-xl">shop</span></div>

        <div id="navbar" class="hidden absolute right-5 top-20 bg-[#000000] bg-opacity-50 p-10 rounded-xl">
            <ul class="text-center text-sm capitalize text-white font-light cursor-pointer ">
                <li class="pb-4"><a class="hover:drop-shadow-[0_0_1px_#D9D6D5]" href="<?= base_url(); ?>">beranda</a></li>
                <li class="pb-4"><a class="hover:drop-shadow-[0_0_1px_#D9D6D5]" href="<?= base_url(); ?>menu">menu</a></li>
                <li class="pb-4"><a class="hover:drop-shadow-[0_0_1px_#D9D6D5]" href="#">order</a></li>
            </ul>
        </div>

        <div id="hamburger" class="md:hidden">
            <i class="fa-solid fa-bars text-white cursor-pointer text-xl"></i>
        </div>

        <div id="close" class="hidden">
            <i class="fa-solid fa-xmark text-white cursor-pointer text-xl"></i>
        </div>

        <div class="hidden md:inline-block">
            <ul class="flex text-white gap-16 capitalize text-sm cursor-pointer font-light justify-center lg:text-base">
                <li><a class="hover:drop-shadow-[0_0_1px_#D9D6D5]" href="<?= base_url(); ?>">beranda</a></li>
                <li><a class="hover:drop-shadow-[0_0_1px_#D9D6D5]" href="<?= base_url(); ?>menu">menu</a></li>
                <li><a class="hover:drop-shadow-[0_0_1px_#D9D6D5]" href="#">order</a></li>
            </ul>
        </div>

        <div class="hidden md:inline-block">
            <a href="#" class="bg-dark1 shadow-[0_0_3px_#D9D6D5] border-2 border-dark1 text-sm text-white py-0 px-5 rounded-full font-extralight capitalize lg:text-base hover:shadow-[0_0_5px_#D9D6D5]">daftar</a>
            <a href="<?= site_url('Admin'); ?>" class="bg-transparent border-2 border-dark1 shadow-[0_0_3px_#D9D6D5] text-sm text-light py-0 px-5 rounded-full font-light capitalize lg:text-base hover:shadow-[0_0_5px_#D9D6D5]">admin</a>
        </div>

    </header>
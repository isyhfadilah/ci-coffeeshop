<!-- hero section start -->
<section class="hero mx-[8%] my-[45%] sm:my-[25%] md:my-[20%] lg:my-[12%]">
    <div class="flex justify-center">
        <img class="drop-shadow-[0_0_1px_#D9D6D5]" src="assets/hero.svg" alt="" />
    </div>

    <div class="btn flex justify-center m-[2%]">
        <a href="#" class="text-center text-white bg-dark1 py-[5px] px-[50px] rounded-full text-[16px] shadow-[0_0_5px_#D9D6D5] hover:shadow-[0_0_10px_#D9D6D5]">join as customer</a>
    </div>
</section>
<!-- hero section end -->

<!-- about section start -->
<section class="md:flex md:justify-between md:items-center">
    <div class="mx-[8%]">
        <div class="flex justify-center md:justify-start">
            <div class="w-2/2">
                <div class="bg-stone-800 rounded-full text-center shadow-[0_0_5px_#D9D6D5]">
                    <span class="text-white font-light">tentang</span>
                </div>

                <div class="logo pt-2 text-center uppercase font-semibold text-white font-handrawn tracking-wider text-4xl lg:text-5xl"><span class="text-stone-950 lg:hidden">_</span> cf<span class="text-dark1 text-xl lg:text-2xl drop-shadow-[0_0_1px_#D9D6D5]">shop</span><span class="text-stone-950 lg:hidden">_</span></div>
            </div>
        </div>

        <div class="mt-5 container mx-auto text-center md:text-justify lg:mt-10">
            <p class="text-light font-light lg:text-lg">Tempat nongkrong yang menyediakan berbagai jenis kopi dgn kualitas tinggi dan bahan-bahan lokal yang segar</p>
        </div>

        <div class="text-white text-xl text-center cursor-pointer mt-5 md:text-start lg:mt-10 lg:text-2xl">
            <i class="fa-brands fa-instagram mr-2 hover:drop-shadow-[0_0_3px_#D9D6D5]"></i>
            <i class="fa-brands fa-facebook-f mr-2 hover:drop-shadow-[0_0_3px_#D9D6D5]"></i>
            <i class="fa-brands fa-whatsapp mr-2 hover:drop-shadow-[0_0_3px_#D9D6D5]"></i>
            <i class="fa-brands fa-github hover:drop-shadow-[0_0_3px_#D9D6D5]"></i>
        </div>
    </div>

    <div class="flex justify-center mt-20 drop-shadow-[0_0_3px_#D9D6D5] lg:ml-10"><img class="w-4/5 md:w-5/5 object-cover" src="assets/about.svg" alt=""></div>
</section>
<!-- about section end -->

<!-- best menu section start -->
<section class="mt-[10%] mx-[8%]">
    <div class="flex justify-center">
        <div class="w-2/2">
            <div class="bg-stone-800 rounded-full text-center shadow-[0_0_5px_#D9D6D5]">
                <span class="text-white font-light">best menu</span>
            </div>

            <div class="logo pt-2 text-center uppercase font-semibold text-white font-handrawn tracking-wider text-4xl lg:text-5xl"><span class="text-stone-950 lg:hidden">_</span> cf<span class="text-dark1 text-xl lg:text-2xl drop-shadow-[0_0_1px_#D9D6D5]">shop</span><span class="text-stone-950 lg:hidden">_</span></div>
        </div>
    </div>

    <div class="pt-5 flex flex-wrap justify-center md:flex-nowrap md:gap-5 lg:gap-36 lg:pt-10">
        <?php foreach ($kopi as $key) { ?>
            <div class="bg-stone-900 mb-5 w-2/3 p-4 rounded-xl cursor-pointer hover:shadow-[0_0_5px_#D9D6D5] lg:px-6 lg:py-10">
                <div class="flex justify-center">
                    <img class="rounded-xl" src="<?= base_url('assets/') . $key->foto; ?>" alt="">
                </div>

                <div class="text-stone-500 capitalize my-4">
                    <p class="text-md"><?= $key->nama ?></p>
                    <p class="text-white text-xl">Rp<?= $key->harga ?></p>
                </div>

                <div class="bg-dark1 text-center rounded-full py-1 shadow-[0_0_2px_#D9D6D5] hover:shadow-[0_0_5px_#D9D6D5]">
                    <a class="text-white" href="">order</a>
                </div>
            </div>
        <?php }; ?>
    </div>
</section>
<!-- best menu section end -->

<!-- berlangganan section start -->
<section class="my-[10%] mx-[8%]">
    <div class="flex justify-center">
        <div class="w-2/2">
            <div class="bg-stone-800 rounded-full text-center shadow-[0_0_5px_#D9D6D5]">
                <span class="text-white font-light">customer</span>
            </div>

            <div class="logo pt-2 text-center uppercase font-semibold text-white font-handrawn tracking-wider text-4xl lg:text-5xl"><span class="text-stone-950 lg:hidden">_</span> cf<span class="text-dark1 text-xl lg:text-2xl drop-shadow-[0_0_1px_#D9D6D5]">shop</span><span class="text-stone-950 lg:hidden">_</span></div>
        </div>
    </div>

    <div class="flex justify-between items-center mt-5 rounded-xl bg-gradient-to-t from-stone-700 to-dark1 h-2/3 lg:mt-10">
        <div>
            <img class="w-2/3 object-cover lg:w-1/2" src="<?= base_url('assets/'); ?>langganan.png" alt="">
        </div>

        <div class="pr-5">
            <p class="text-light text-justify font-semibold sm:text-xl lg:text-2xl">Mari <span class="bg-light text-stone-900 rounded-full font-bold"> berlangganan</span> dan nikmati diskon besar-besarannya sekarang</p>
        </div>
    </div>

    <div class="md:flex md:gap-10 md:justify-between lg:gap-20 md:mt-10">
        <div class="flex bg-stone-900 w-2/2 items-end justify-between rounded-xl mt-5 py-5 px-10 hover:shadow-[0_0_5px_#D9D6D5] cursor-pointer md:w-1/2 lg:py-10">
            <div class="text-white">
                <h1 class="uppercase text-xl mb-5 font-semibold">silver</h1>
                <div class="mb-2">
                    <p class="text-stone-500">username</p>
                    <p class="text-lg">Aisyah</p>
                </div>
                <div>
                    <p class="text-stone-500">berlaku hingga</p>
                    <p class="text-lg">30/06/2023</p>
                </div>
            </div>

            <div class="text-white opacity-50 text-8xl md:text-5xl lg:text-8xl">
                <i class="fa-solid fa-mug-hot"></i>
            </div>
        </div>

        <div class="flex bg-stone-900 w-2/2 items-end justify-between rounded-xl mt-5 py-5 px-10 hover:shadow-[0_0_5px_#D9D6D5] cursor-pointer md:w-1/2 lg:py-10">
            <div class="text-white">
                <h1 class="uppercase text-xl mb-5 font-semibold">gold</h1>
                <div class="mb-2">
                    <p class="text-stone-500">username</p>
                    <p class="text-lg">Rafi</p>
                </div>
                <div>
                    <p class="text-stone-500">berlaku hingga</p>
                    <p class="text-lg">30/06/2023</p>
                </div>
            </div>

            <div class="text-white opacity-50 text-7xl md:text-4xl lg:text-7xl">
                <i class="fa-solid fa-mug-hot"></i>
                <i class="fa-solid fa-mug-hot"></i>
            </div>
        </div>
    </div>

</section>
<!-- berlangganan section end -->
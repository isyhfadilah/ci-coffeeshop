<section class="my-[30%] sm:my-[20%] md:my-[15%] lg:my-[10%] mx-[8%]">
    <h1 class="text-3xl text-white text-center capitalize">daftar <span class="text-dark1 font-handrawn text-4xl drop-shadow-[0_0_1px_#D9D6D5]">menu</span><span class="text-base text-opacity-[50%]">a bersamamu</span></h1>

    <div class="pt-5 flex flex-wrap justify-center md:flex-nowrap md:gap-5 lg:gap-36 lg:pt-10">
        <div class="pt-5 flex flex-wrap justify-center md:flex-nowrap md:gap-5 lg:gap-36 lg:pt-10">
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
        </div>
    </div>
</section>
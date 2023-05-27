<section class="my-[30%] sm:my-[20%] md:my-[15%] lg:my-[10%] mx-[8%]">
    <div class="flex justify-center">
        <div class="bg-stone-900 mb-5 w-2/3 sm:w-1/2 md:w-1/3 lg:w-1/4 p-4 rounded-xl cursor-pointer hover:shadow-[0_0_5px_#D9D6D5] lg:px-6 lg:py-10">
            <div class="flex justify-center">
                <img class="rounded-xl" src="<?= base_url('assets/') . $menu['foto']; ?>" alt="">
            </div>

            <div class="text-stone-500 capitalize my-4">
                <p class="text-md"><?= $menu['nama'] ?></p>
                <p class="text-white text-xl">Rp<?= $menu['harga'] ?></p>
            </div>

            <div class="bg-dark1 text-center rounded-full py-1 shadow-[0_0_2px_#D9D6D5] hover:shadow-[0_0_5px_#D9D6D5]">
                <a class="text-white" href="">order</a>
            </div>
        </div>
    </div>


    <div class="flex justify-center mt-5">
        <a class="w-2/3 sm:w-1/2 md:w-1/3 lg:w-1/4 bg-stone-800 text-light w-1/2 mb-[5%] mx-5 py-1 text-center rounded-full shadow-[0_0_2px_#D9D6D5] hover:shadow-[0_0_5px_#D9D6D5]" href="<?= base_url(); ?>admin">kembali</a>
    </div>
</section>
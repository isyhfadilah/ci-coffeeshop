<!-- form section start -->
<section class="my-[30%] sm:my-[20%] md:my-[15%] lg:my-[10%] mx-[8%]">
    <div class="flex justify-center">
        <div class="bg-stone-900 px-[2%] py-[5%] rounded-xl w-2/2 sm:w-2/3 shadow-[0_0_5px_#D9D6D5]">
            <h1 class="text-center text-light pb-[5%] font-bold uppercase text-[20px]">ubah menu</h1>

            <form class="w-full" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                <div class="flex flex-wrap mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block capitalize tracking-wide text-light text-xs font-bold mb-2" for="grid-first-name">
                            Nama
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-[#2a140e] border border-red-500 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="nama" placeholder="nama produk" value="<?= $menu['nama']; ?>">
                        <div class="text-sm text-red-700"><?= form_error('nama'); ?></div>
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block capitalize tracking-wide text-light text-xs font-bold mb-2" for="grid-last-name">
                            Harga
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-[#2a140e] border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="harga" placeholder="22000" value="<?= $menu['harga']; ?>">
                        <div class="text-sm text-red-700"><?= form_error('harga'); ?></div>
                    </div>
                </div>

                <div class="flex flex-wrap mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block capitalize tracking-wide text-light text-xs font-bold mb-2" for="grid-password">
                            Gambar
                        </label>
                        <img class="w-36 pb-5 rounded-lg" src="<?= base_url('assets/') . $menu['foto'] ?>" alt="">
                        <input class="appearance-none block w-full bg-gray-200 text-[#2a140e] border border- rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="file" name="berkas">
                    </div>
                    <div class="w-full px-3 mt-10">
                        <input class="block w-full bg-dark1 text-light rounded-full py-2 px-4 leading-tight focus:outline-none cursor-pointer shadow-[0_0_2px_#D9D6D5]" type="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- form section end -->
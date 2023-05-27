<section class="my-[30%] sm:my-[20%] md:my-[15%] lg:my-[10%] mx-[8%]">
    <h1 class="text-3xl text-white text-center capitalize">daftar <span class="text-dark1 font-handrawn text-4xl drop-shadow-[0_0_1px_#D9D6D5]">menu</span><span class="text-base text-opacity-[50%]">a bersamamu</span></h1>

    <div class="mt-[1%] flex justify-center">
        <!-- controller/method -->
        <a class="capitalize bg-dark1 shadow-[0_0_2px_#D9D6D5] text-white px-5 mx-10 py-1 rounded-full" href="<?php echo base_url(); ?>admin/tambah">tambah menu</a>
    </div>

    <div class="mt-[2%] mx-[3%] flex justify-start">
        <form action="" method="post" class="flex hidden">
            <input class="py-2 rounded-lg" type="text" placeholder="cari menu" name="keyword">
            <button type="submit" class="text-sm bg-dark2 text-white rounded-lg mx-[2%]">cari</button>
        </form>
    </div>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="mt-[1%] mx-[20%] hidden">
            <div class="bg-dark2 border border-dark1 text-dark1 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Berhasil!</strong>
                <span class="block sm:inline">Data menu berhasil <?= $this->session->flashdata('flash'); ?></span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
    <?php endif; ?>


    <table class="container mt-10 mx-auto bg-stone-900 shadow-[0_0_5px_#D9D6D5]">
        <!-- masih belum berjalan -->
        <?php if (empty('menu')) : ?>
            <div class="text-sm text-red-700 bg-white">
                <p>data tidak ditemukan</p>
            </div>
        <?php endif; ?>

        <tr class="text-light uppercase">
            <th class="hidden">ID</th>
            <th class="border border-solid border-stone-700 border-[1px] hidden py-5">Foto</th>
            <th class="border border-solid border-stone-700 border-[1px] py-5">Nama</th>
            <th class="border border-solid border-stone-700 border-[1px]">Aksi</th>
        </tr>

        <?php foreach ($menu as $key) { ?>
            <tr class="text-center bg-stone-800 text-light">
                <td class="hidden"><?php echo "$key->id"; ?></td>
                <td class="border border-solid border-stone-700 border-[1px] flex justify-center hidden"><img class="w-20 rounded-xl object-cover" src="<?php echo base_url('assets/') . $key->foto; ?>" alt="<?php echo base_url('assets/') . $key->foto; ?>"></td>
                <td class="border border-solid border-stone-700 border-[1px] py-3"><?php echo "$key->nama"; ?></td>
                <td class="border border-solid border-stone-700 border-[1px] capitalize gap-10">
                    <a href="<?= base_url(); ?>admin/detail/<?= $key->id; ?>" class="bg-blue-500 text-white px-5 rounded-full shadow-[0_0_2px_#D9D6D5] ">detail</a>
                    <a href="<?= base_url(); ?>admin/hapus/<?= $key->id; ?>" class="bg-red-600 text-white px-5 rounded-full shadow-[0_0_2px_#D9D6D5]" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= base_url(); ?>admin/ubah/<?= $key->id; ?>" class="bg-lime-600 text-white  px-5 rounded-full shadow-[0_0_2px_#D9D6D5]">ubah</a>
                </td>
            </tr>
        <?php }; ?>
    </table>

    <div class="mt-10">
        <a class="bg-dark1 text-white px-5 py-1 rounded-full capitalize shadow-[0_0_2px_#D9D6D5]" href="<?php echo base_url('Admin/logout'); ?>">logout</a>
    </div>
</section>
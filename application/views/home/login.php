<!-- component -->
<form action="<?= site_url('Home/login_check'); ?>" method="post" class="my-[30%] md:my-[20%] lg:my-[10%] flex justify-center">
    <div class="bg-stone-900 shadow-[0_0_5px_#D9D6D5] rounded-xl w-1/1 px-8 py-16 flex flex-col">
        <div class="text-white text-center text-9xl mb-10">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="mb-4">
            <label class="block text-stone-500 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-stone-500" id="username" type="text" placeholder="Username" name="username">
        </div>
        <div class="mb-8">
            <label class="block text-stone-500 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-stone-500 mb-3" id="password" type="password" placeholder="***********" name="password">

            <?php
            if ($this->session->userdata('msg')) { ?>
                <p class="text-red-700 text-sm"><?php echo $this->session->userdata('msg'); ?></p>
            <?php
                $this->session->sess_destroy();
            }
            ?>

        </div>

        <div class="flex items-center justify-between">
            <input type="submit" value="login" class="bg-dark1 text-white rounded-full px-5 py-1 cursor-pointer shadow-[0_0_2px_#D9D6D5] hover:shadow-[0_0_5px_#D9D6D5]">

            <a class="inline-block align-baseline font-medium text-xs text-light" href="#">
                Forgot Password?
            </a>
        </div>
    </div>
</form>
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            
            <h6 class="font-bold">Tambah Users</h6>
            
            <?php $validation = \Config\Services::validation(); ?>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <form action="/admin/masterusers" method="post">
                    <div class="p-6 overflow-x-auto">
                        <p>Nama</p>
                        <input type="text" name="nama" placeholder="Ex: Sudirmann" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <?php if($validation->getError('nama')) {?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-2 my-2 py-2 rounded relative" role="alert">
                            <span class="block sm:inline"><?= $error = $validation->getError('nama'); ?></span>
                        </div>
                        <?php }?>
                        <p>Email</p>
                        <input type="email" name="email" placeholder="Ex: rano@myrelasi.id" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <?php if($validation->getError('email')) {?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-2 my-2 py-2 rounded relative" role="alert">
                            <span class="block sm:inline"><?= $error = $validation->getError('email'); ?></span>
                        </div>
                        <?php }?>
                        <p>Nomor Telefon</p>
                        <input type="text" name="nomorTelefon" placeholder="Ex: 85157522155" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <?php if($validation->getError('nomorTelefon')) {?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-2 my-2 py-2 rounded relative" role="alert">
                            <span class="block sm:inline"><?= $error = $validation->getError('nomorTelefon'); ?></span>
                        </div>
                        <?php }?>
                        <p>Pasword</p>
                        <input type="password" name="password" placeholder="Ex: 85157522155" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        <?php if($validation->getError('password')) {?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-2 my-2 py-2 rounded relative" role="alert">
                            <span class="block sm:inline"><?= $error = $validation->getError('password'); ?></span>
                        </div>
                        <?php }?>
                        <button type="submit" class="inline-block  my-3 px-6 py-3 font-bold text-center text-white align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-blue-700 to-red-700 hover:shadow-soft-2xl hover:scale-102" href="/admin/masterusers/new">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
<?= $this->endSection() ?>
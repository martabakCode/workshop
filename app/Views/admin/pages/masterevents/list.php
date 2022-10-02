<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            
            <h6 class="font-bold">Master Events Table <a class="inline-block absolute right-5 px-6 py-3 font-bold text-center text-white align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-blue-700 to-red-700 hover:shadow-soft-2xl hover:scale-102" href="/admin/masterevents/new">Tambah Acara</a></h6>
            <?php
                    $inputs = session()->getFlashdata('inputs');
                    $errors = session()->getFlashdata('errors');
                    $error = session()->getFlashdata('error');
                    $success = session()->getFlashdata('success');
                    if(!empty($errors)){ ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                        <?php foreach ($errors as $errors) : ?>
                            <li><?= esc($errors) ?></li>
                        <?php endforeach ?>
                        </ul>
                    </div>
                    <?php
                    } 
                    if(!empty($error)){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?= esc($error) ?><br />
                    </div>
                    <?php } 
                    if(!empty($success)){?>
                    <div class="alert alert-success" role="alert">
                        <?= esc($success) ?><br />
                    </div>
                <?php } ?>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-4 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Judul</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                    $i = 1;
                    foreach($masterEvent as $data):?>
                <tr>
                    <tr>
                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-xs"><?= $i++ ?></p>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <p class="mb-0 font-semibold leading-tight text-xs"><?= $data['judul'] ?></p>
                    </td>
                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <a href="/admin/masterevents/<?=$data['id'] ?>/edit" class="inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-orange-500 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"> Edit </a>
                        <a href="/admin/masterevents/<?=$data['id'] ?>" class="inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-gray-500 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"> Detail </a>
                        <a href="/admin/masterevents/<?=$data['id'] ?>/delete" class="inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-red-500 rounded-lg cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs"> Delete </a>
                    </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
<?= $this->endSection() ?>
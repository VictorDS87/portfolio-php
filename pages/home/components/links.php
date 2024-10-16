<?php 
    $social_media = [
        [
            'image' => '../../../assets/LinkedinLogo.svg',
            'name' => 'Linkedin',
        ],
        [
            'image' => '../../../assets/InstagramLogo.svg',
            'name' => 'Instagram',
        ],
        [
            'image' => '../../../assets/GithubLogo.svg',
            'name' => 'Github',
        ],
        [
            'image' => '../../../assets/EnvelopeSimple.svg',
            'name' => 'E-mail',
        ],            
    ]
?>

<div class="mt-28">
    <p class="text-center font-mono text-violet-700 text-lg">Contato</p>
    <h3 class="text-center text-2xl font-bold text-white">Gostou do meu trabalho?</h3>
    <p class="text-center text-slate-500">Entre em contato ou acompanhe as minhas redes sociais!</p>
    <div class="cards flex flex-col items-center mt-8">
        <?php foreach($social_media as $media): ?>
            <div class="group border-2 border-transparent hover:border-gray-500  my-2 card flex bg-gray-800 w-96 rounded-lg h-16 justify-between py-0 px-3 items-center transition-border duration-300 cursor-pointer">
                <i class="group-hover:text-gray-500 flex text-center gap-4 text-white items-center font-medium transition-border duration-300"><img src=<?=$media['image']?> alt=""><?=$media['name']?></i>
                <i><img src="../../../assets/ArrowUpRight.svg" alt=""></i>
            </div>
        <?php endforeach; ?>
    </div>
</div>
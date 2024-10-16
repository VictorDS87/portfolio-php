<?php
    $tech = [
        'php' => [
            'name' => 'PHP',
            'color' => 'bg-violet-500'
        ],
        'css' => [
            'name' => 'CSS',
            'color' => 'bg-sky-500'
        ],
        'html' => [
            'name' => 'HTML',
            'color' => 'bg-red-600'
        ],
        'javascript' => [
            'name' => 'JavaScript',
            'color' => 'bg-amber-400'
        ],
        
    ];
    $projects =[
        [
            'name' => 'Travelgram',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'tecnologies' => [
                'php' => $tech['php'],
                'css' => $tech['css'],
                'html' => $tech['html'],
                'javascript' => $tech['javascript']
            ]
        ],
        [
            'name' => 'Travelgram 2',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'tecnologies' => [
                'php' => $tech['php'],
                'css' => $tech['css'],
                'html' => $tech['html'],
                'javascript' => $tech['javascript']
            ]
        ],
        [
            'name' => 'Travelgram 3',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'tecnologies' => [
                'php' => $tech['php'],
                'css' => $tech['css'],
                'html' => $tech['html'],
                'javascript' => $tech['javascript']
            ]
        ],
        [
            'name' => 'Travelgram 4',
            'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo',
            'tecnologies' => [
                'php' => $tech['php'],
                'css' => $tech['css'],
                'html' => $tech['html'],
                'javascript' => $tech['javascript']
            ]
        ]
        
    ]

?>
<!-- eslint-disable -->
<div class="mt-40">
    <p class="text-center text-red-400 font-mono">Meu trabalho</p>
    <h3 class="text-white text-center font-bold text-xl">Veja os projetos em destaque</h3>
    <div class="mt-20">
        <div class="cards grid grid-cols-2 gap-4">
            <?php foreach($projects as $project): ?>
                <div class="cursor-pointer border-2 border-transparent hover:border-gray-500 card flex bg-gray-800 p-2 rounded-md mr-1 transition-border duration-300">
                    <img src="../../../assets/image.png" alt="">
                    <div class="flex flex-col justify-between ml-6">
                        <p class="text-white font-bold"><?=$project['name']?></p>
                        <p class="text-slate-500"><?=$project['description']?></p>
                        <div class="tecnologias">
                            <?php foreach($project['tecnologies'] as $tech): ?>
                                <span class="p-[0.24rem] px-[0.25rem] font-medium w-2 h-2 rounded-2xl <?=$tech['color']?>"><?=$tech['name']?></span>
                            <?php endforeach?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>      
        </div>
    </div>
</div>
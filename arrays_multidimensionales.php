<?php

    $data = [
        [   
            'nombre' => 'Juan Muñoz',
            'email' => 'juanmunozgrau@gmail.com',
            'celular' => '982262756',
            'direccion' => [
                'pais' => 'Chile',
                'ciudad' => 'Santiago',
            ]
        ],
        [   
            'nombre' => 'Michael Ironside',
            'email' => 'mironside@gmail.com',
            'celular' => '986654570',
            'direccion' => [
                'pais' => 'Chile',
                'ciudad' => 'Santiago',
            ]
        ],
        [   
            'nombre' => 'John Carpenter',
            'email' => 'jcarpenter@gmail.com',
            'celular' => '963748763',
            'direccion' => [
                'pais' => 'Chile',
                'ciudad' => 'Santiago',
            ]
        ],
    ];

    // echo $data[0]['nombre'] . "<br>";
    // echo $data[0]['direccion']['ciudad'] . "<br>";

    foreach($data as $item){
        echo $item['nombre'] . '<br>';
        echo $item['email'] . '<br>';
        echo $item['celular'] . '<br>';
    }

?>

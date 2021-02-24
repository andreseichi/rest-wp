<?php

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home(){
    // Criando um bloco
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Campo personalizado do Menu da Semana',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    // Adicionando campo
    $cmb->add_field([
        'name' => 'Comida',
        'id' => 'comida',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Descrição',
        'id' => 'descricao',
        'type' => 'textarea',
    ]);
}

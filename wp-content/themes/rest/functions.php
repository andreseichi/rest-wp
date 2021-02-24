<?php

// Função para retornar o objeto meta field
// Não precisa colocar o id da página se o meta field tiver na mesma página
function get_field_cmb2($key, $page_id = 0)
{
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}

// Imprime o objeto meta field
function the_field_cmb2($key, $page_id = 0)
{
    echo get_field_cmb2($key, $page_id);
}

// Função para adicionar o campo no WP da página home
add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home()
{
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


// Função para adicionar o campo no WP da página sobre
add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre()
{
    // Criando um bloco
    $cmb = new_cmb2_box([
        'id' => 'sobre_box',
        'title' => 'Campo personalizado do Sobre',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-sobre.php'
        ],
    ]);

    // Campo arquivo
    $cmb->add_field([
        'name' => 'Foto Rest',
        'id' => 'foto_rest',
        'type' => 'file',
        'options' => [
            'url' => true,
        ],
    ]);
}

?>
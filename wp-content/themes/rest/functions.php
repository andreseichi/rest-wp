<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// Habilitar Menus
add_theme_support('menus');


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


function the_field_wpautop($key, $page_id = 0)
{
    echo wpautop(get_field_cmb2($key, $page_id));
}


// Função para adicionar o campo no WP da página home
add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home()
{
    // Criando um bloco
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Campo personalizado do Menu da Semana - CMB2',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
    ]);

    // Criando campo do título da comida da esquerda
    $cmb->add_field([
        'name' => 'Tipo de comida',
        'id' => 'comida',
        'type' => 'text',
    ]);

    // Criando campo de repetição
    $pratos = $cmb->add_field([
        'name' => 'Pratos do lado esquerdo',
        'id' => 'pratos',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Prato {#}',
            'add_button' => 'Adicionar prato',
            'remove_button' => 'Remover prato',
            'remove_confirm' => 'Deseja remover o prato?',
            'sortable' => true,
            'closed' => true,
        ],
    ]);

    // Adicionando subfield
    $cmb->add_group_field($pratos, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    // Adicionando subfield
    $cmb->add_group_field($pratos, [
        'name' => 'Descrição',
        'id' => 'descricao',
        'type' => 'textarea',
    ]);

    // Adicionando subfield
    $cmb->add_group_field($pratos, [
        'name' => 'Preço',
        'id' => 'preco',
        'type' => 'text',
    ]);

    // Criando campo do título da comida da direita
    $cmb->add_field([
        'name' => 'Tipo de comida',
        'id' => 'comida_direita',
        'type' => 'text',
    ]);

    // Criando campo de repetição
    $pratos_direita = $cmb->add_field([
        'name' => 'Pratos do lado direito',
        'id' => 'pratos_direita',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Prato {#}',
            'add_button' => 'Adicionar prato',
            'remove_button' => 'Remover prato',
            'remove_confirm' => 'Deseja remover o prato?',
            'sortable' => true,
            'closed' => true,
        ],
    ]);

    // Adicionando subfield
    $cmb->add_group_field($pratos_direita, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    // Adicionando subfield
    $cmb->add_group_field($pratos_direita, [
        'name' => 'Descrição',
        'id' => 'descricao',
        'type' => 'textarea',
    ]);

    // Adicionando subfield
    $cmb->add_group_field($pratos_direita, [
        'name' => 'Preço',
        'id' => 'preco',
        'type' => 'text',
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

    // Campo Alt do arquivo
    $cmb->add_field([
        'name' => 'Texto alternativo da foto',
        'id' => 'alt_foto_rest',
        'type' => 'text_medium',
    ]);

    // Campo de repetição
    $sobre = $cmb->add_field([
        'name' => 'Título e texto',
        'id' => 'sobre',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Sobre {#}',
            'add_button' => 'Adicionar Texto',
            'remove_button' => 'Remover Texto',
            'remove_confirm' => 'Deseja remover o texto?',
            'sortable' => true,
            'closed' => true,
        ],
    ]);

    // Subfield titulo
    $cmb->add_group_field($sobre, [
        'name' => 'Titulo',
        'id' => 'titulo',
        'type' => 'text',
    ]);

    // Subfield texto
    $cmb->add_group_field($sobre, [
        'name' => 'Texto',
        'id' => 'texto',
        'type' => 'textarea',
        // 'options' => [
        //     'wpautop' => true,
        // ],
    ]);
}

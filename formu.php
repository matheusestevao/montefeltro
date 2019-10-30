<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

switch (get_post_action('cadastrar', 'voltar', 'retirar', 'alterar', 'reintegrar', 'cad_usuario', 'alt_usuario', 'excluir', 'menu', 'cadastro', 'requisitar', 'lista', 'pedido')) 
{
    case 'cadastrar':
        //save article and keep editing
        include ("envia.php");
        break;

    case 'voltar':
        //save article and redirect
        include ("index.php");
        break;

    case 'retirar':
        //save article and keep editing
        include ("update.php");
        break;

    case 'alterar':
        //save article and keep editing
        include ("update_merc.php");
        break;

    case 'reintegrar':
        //save article and keep editing
        include ("update2.php");
        break;

    case 'cad_usuario':
        //save article and keep editing
        include ("envia_usu.php");
        break;

    case 'alt_usuario':
        //save article and keep editing
        include ("update_usu.php");
        break;

    case 'excluir':
        //save article and keep editing
        include ("excluir_usu.php");
        break;

    case 'menu':
        //save article and keep editing
        include ("index.php");
        break;

    case 'cadastro':
        //save article and keep editing
        include ("cadastro.php");
        break;

    case 'requisitar':
        //save article and keep editing
        include ("envia_ped.php");
        break;

    case 'lista':
        //save article and keep editing
        include ("lista.php");
        break;

    case 'pedido':
        //save article and keep editing
        include ("pedido.php");
        break;

    default:
    echo 'Erro';
}
?>
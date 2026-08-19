<?php
function carregar_estilos_tema() {
    // Carrega o style.css principal da raiz do tema
    wp_enqueue_style('meu-estilo-principal', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'carregar_estilos_tema');
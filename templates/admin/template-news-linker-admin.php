<div class="wrap">
    <h2>Configurações do Noticias Plugin</h2>
    <form method="post" action="options.php">
        <?php
        settings_fields('noticias_plugin_opcoes');
        do_settings_sections('configuracoes-noticias-plugin');
        submit_button('Salvar Configurações');
        ?>
    </form>
</div>
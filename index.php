<?php get_header(); ?>

<main>
    <!-- teste para Boostrap e JQuery, pode apagar kkkk -->
    <button id="b" type="button" class="btn btn-primary">Clique em mim para testar o JQuery</button>
    <script>
        $('#b').click(function (e) { 
            e.preventDefault();
            console.log('JQuery funcionou');
        });
    </script>
</main>

<?php get_footer(); ?>
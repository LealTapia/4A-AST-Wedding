<?php 
    session_destroy();
    echo
    '
        <script>
            window.location = "index.php?pagina=home";
        </script>
    ';
?>
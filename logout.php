<?php
ini_set('session.save_path', 'tmp/');
session_start();
session_destroy();
?>

<script>
    window.location.href="/";
</script>
<?php
    unlink('Nome.txt');
    fopen('Nome.txt','w+');
    header("Location: index.php");
<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=usuarios','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }
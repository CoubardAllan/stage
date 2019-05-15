<?php
require_once 'src/animaux.php';
class lion extends animal{
    public function parler()
    {
        echo 'Je suis un lion et je suis le premier Lion au monde à parler';
    }
}

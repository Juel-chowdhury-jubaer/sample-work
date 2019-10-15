<!DOCTYPE html>
<html lang="en-US">
<body>

<?php
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;
            $source = 'en';
            $target = 'it';
            $text = 'I love You';
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
            echo '<h2>'.$result.'</h2>';
        ?>
</body>
</html>

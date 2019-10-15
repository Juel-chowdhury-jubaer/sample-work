 <?php

require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;
            $source = 'en';
            $target = 'es';
            //echo 'ami tumi o se';
            $text = 'I live';
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
            echo '<h2>'.$result.'</h2>';
        ?>

<?php

require_once(dirname(__file__).'/../lib/Controller/PlainWeb.php');

class web extends PlainWeb {

    function get() {
        $d = View::load('dressing');
        $d->center = $d->fetch($this->params['view']);
        $d->display();
    }

}

?>
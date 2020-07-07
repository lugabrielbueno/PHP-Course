<?php

fopen('log.txt','a+');

fclose('log.txt');

unlink('log.txt');

?>
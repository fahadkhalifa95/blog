<html>
<h1> logins </h1>

<?php


echo $this->Form->create("Logins",array('url/login'));
echo $this->Form->input('username');

echo $this->Form->input('password');

"<br>";
echo $this->Form->button('Submit' );

echo $this->Form->button('amneh');
echo $this->Form->button('fahad');
echo $this->Form->end();









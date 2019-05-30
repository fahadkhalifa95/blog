<?php
echo $this->Form->create("Localizations",array('url'=>'/locale'));
echo $this->Form->radio("locale",[
    ['value'=>'en_US','text'=>'English'],
    ['value'=>'de_DE','text'=>'German'],
    ['value'=>'fr_FR','text'=>'French'],
]);
echo $this->Form->button('Change Language');
echo $this->Form->end();

//echo $this->set('users', $this->paginate($this->Users->find('all')));
?>
<?php echo __('msg'); ?>
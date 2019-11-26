<?php
echo form_open('form-2');
   
  //<input name="nom" type="text" value="" / on met à sa place:>
   
$nom= array(
'name'=>'nom',
'id'=>'nom',
'placeholder'=>'Nom', // sa remplace label  echo form_label('Votre nom', 'nom');
'value'=>set_value('nom')
  );
//echo form_error('nom');
echo form_input($nom);
 
$prenom=array(
'name'=>'prenom',
'id'=>'prenom',
'placeholder'=>'Prenom',
'value'=>set_value('prenom')
);
//echo form_error('prenom');
echo form_input($prenom);
 
$mail=array(
'name'=>'mail',
'id'=>'mail',
'placehoder'=>'mail',
'value'=>set_value('mail')
);
//echo form_error('mail');
echo form_input($mail);
echo form_submit('envoi', 'Valider');
echo form_close();
   
?>
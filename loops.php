<?php
#LOOPS - Execute code set number of times

/*
For
While
Do..while
Foreach
*/

#For Loop
# @params-init, condition, increment

/*

for($i=0;$i<10;$i++){
    echo $i;
    echo '<br>';
}

*/


#While loop
# @params - condition

/*
$i=0;
while($i<10){
    echo $i;
    echo '<br>';
    $i++;
}
*/


#Do..While
# @param - condition

/*
$i=0;
do{
    echo $i;
    echo '<br>';
    $i++;
}
while($i<10);
*/

/*


$people =array('Brad', 'Jose', 'William');

foreach($people as $person){
    echo $person;
    echo '<br>';
}
*/


$people =array('Brad'=>'brad@gmail.com', 'Jose'=>'jose@gmail.com', 'William'=>'will@gmail.com');
foreach($people as $person=>$email){
    echo $person.': '.$email;
    echo '<br>';
}
?>
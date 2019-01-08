
<html>
<head>
<script type="text/javascript">
var input1=window.prompt("enter the first number");
document.writeln("come over here today")
</script><head>
<body>
<?php 
const BR='<br/>';
$dir='movies';
$files=scandir($dir);
$files=array_diff($files,array('..','.'));
$files=array_values($files);
pre_r($files);
for($key=0;$key<count($files);$key++){
    echo $files[$key].BR;
}
echo BR;

foreach($files as $key => $value){
    echo $files[$key].BR;

}
echo BR;
$key=0;
while($key<count($files)){
    echo $files[$key].BR;
    $key++;
}
echo BR;
$key=0;
do{
    echo $files[$key].BR;
    $key++;
}
while($key<count($files));
echo BR;

function pre_r($array){
    echo "<pre><font color='red'";
    print_r($array);
    echo '</font></pre>';
}
?>

<body>
<html>
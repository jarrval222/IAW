<?php
    $modules[0]="IAW";
    $modules[1]="ASO";
    $modules[2]="SEG";
    $modules[3]="SER";
    $modules[4]="ABD";
    $modules[5]="IPE";
    $modules[6]="OPT";
    $modules[7]="ING";
echo "<h1>Modules of the 2ºyear <h1>";
echo "<ul>";
foreach($modules as $b){
    echo "<li>", $b, "</li>";
}
echo "</ul>";
?>
<?php
    $modules=array("IAW","ASO","SEG","SER","ABD","IPE","OPT","ING");
    echo "<h1>Modules of the 2ºyear <h1>";
    echo "<ul>";
    foreach($modules as $b){
        echo "<li>", $b, "</li>";
    }
    echo "</ul>";
?>


<?php
function Csv()
{
    if (($openTask1 = fopen("task1.csv", "r")) !== FALSE) {
        $dinosaurs1=array();
        while (($data = fgetcsv($openTask1, 100, ",")) !== FALSE) {
            $dinosaurs1 = array($data[0], $data[1], $data[2]);
        }
        fclose($openTask1);
    }
    if (($openTask2 = fopen("task2.csv", "r")) !== FALSE) {
        $dinosaurs2=array();
        while (($data = fgetcsv($openTask2, 100, ",")) !== FALSE) {
            $dinosaurs2 = array($data[0], $data[1], $data[2]);
        }
        fclose($openTask1);
    }
}

function calSpeed()
{
    $dianosaur=array();
    for($i=0;i<count($dinosaurs2);$i++)
    {
        $dinosaurs3=$dinosaurs2[$i];
        for($j=0;$j<count($dinosaurs1;++$j)
         {
             $dinosaurs4=$dinosaurs1[$j];
             if($dinosaur3[0]==$dinosaurs4[0])
             {
                 $speed= echo" <p> (($dianosaur3[1]/$dianosaur4[1])-1)*SQRT($dianosaur4[1]*9.8) <br/></p>\n";
            $dinosaurs=array("name"=>$dinosaurs4[0],"speed"=>$speed);
           echo $speed"<br/>\n";
           }
         }
    }
}
 ?>
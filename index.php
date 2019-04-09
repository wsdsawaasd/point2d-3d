<?php
    include "Point2d.php";
    include "Point3d.php";
    $pen = new Point2d(5,6);
    $pen->setXY(6,7);
    $pen->toString();
    echo "<br/>";
    $pen1 = new Point3d(1,2,3);
    $pen1->setXYZ(2,3,4);
    $pen1->toString();

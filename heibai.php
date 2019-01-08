<!--<table border="1" cellspacing="0" cellpadding="1">-->
<!--    --><?php
//    for($i=1;$i<=10;$i++){
//        echo '<tr>';
//        for($j=1;$j<=10;$j++){
//            $color='';
//            if(($i+$j)%2==0){
//                $color="black";
//            }
//            echo '<td bgcolor="'.$color.'" width="50" height="50"></td>';
//        }
//        echo '</tr>';
//    }
//    ?>
<!--</table>-->

<table border="1" cellpadding="0" cellspacing="1">
    <?php
    for ($i = 1;$i <= 10; $i++){
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++){
            $color = '';
            if (($i + $j)% 2 == 0){
                $color = "black";
            }
            echo '<td bgcolor="'.$color.'" width="50" height="50"></td>';
        }
        echo '</tr>';
    }
    ?>
</table>
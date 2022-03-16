<?php
function kelulusan($total_nilai) {
    if ($total_nilai > 55 ){
    return 'LULUS';
    }else {
    return 'TIDAK LULUS';
    }
}

function grade($total_nilai) {
    if ($total_nilai <= 20){
        return 'E';
    }elseif ($total_nilai <= 40){
        return 'D';
    }elseif ($total_nilai <= 60){
        return 'C';
    }elseif ($total_nilai <= 80){
        return 'B';
    }elseif ($total_nilai <= 100){
        return 'A';
    }else{
        return 'I';
    }
}
function predikat($grade){
    switch ($grade) {
        case 'A':
        echo "<br/> Predikat : Sangat Memuaskan";
        break;
        case 'B':
            echo "<br/> Predikat : Memuaskan";
        break;
        case 'C':
            echo "<br/> Predikat : Cukup";
        break;
        case 'D':
            echo "<br/> Predikat : Kurang";
        break;
        case 'E':
            echo "<br/> Predikat : Sangat Kurang";
        break;
        default:
            echo "<br/> Predikat : Tidak Ada";
    }
    }

?>

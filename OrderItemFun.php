<?php
function dataPass($data){
    return  (isset($_POST[$data]) && !empty($_POST[$data]))?$_POST[$data]:0;
}
// function itemQty($qty){
//     ($qty >0)
//     return  echo htmlspecialchars($spark). ' spark plugs</br>';
// }
?>
<?php
    function ctrlConfirm($request, $response, $container){
        $reserve = $container -> reserve();
        $getRoom = $container -> getRoom();
        $count = $container -> countReserve();
        $all = $container -> allReserve();
        $getInfo = $container -> getInfo();
        if(isset($_GET["start"])&&isset($_GET["end"])&&isset($_GET["roomID"])&&isset($_GET["days"])&&isset($_GET["price"])){

            $count = $count -> countReserve();
            $all = $all -> allReserve();


            for ($i = 0; $i< $count["COUNT(ID)"]; $i++){
                if($all[$i]["end"]<$_GET["start"]){
                    header("Location: index.php");
                }else{
                    ?><script>
                        console.log(false);
                    </script><?php
                }
            }
            

            $getRoom = $getRoom -> getRoom($_GET["roomID"]);
            $getInfo = $getInfo -> getInfo($_SESSION['login']);
            $userid = $getInfo["ID"];
            $reserve -> reserve($_GET["start"], $_GET["end"], $_GET["roomID"], $_GET["price"], $userid);
        }
    }
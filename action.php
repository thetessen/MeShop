<?php 
      session_start();
      print_r($_SESSION["giohang"]) ;
      if (isset($_POST['action']) && $_POST['action']=="remove"){
            if(!empty($_SESSION["giohang"])) {
                foreach($_SESSION["giohang"] as $key => $value) {
                        if($_POST['code'] == $value['ten']){
                            unset($_SESSION["giohang"][$key]);
                            $status = "<div class='box' style='color:red;'>
                            Product is removed from your cart!</div>";
                    }
                    if(empty($_SESSION["giohang"]))   
                            unset($_SESSION["giohang"]);
                        }		
                    }
       }
       

       ?>
<?php
    require_once "blocks/connect.php";

    function getMenu($category){
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `$category`");
        closeDB();
        showMenu(resultToArray($result), $category);
    }
    function resultToArray($result){
        $array = array();
        while (($row = $result->fetch_assoc()) != false){
            $array[]=$row;
        }
        return $array;
    }
    function showMenu($category,$nameTable){
        $nameTable = "'".$nameTable."'";
        for($i=0; $i<count($category); $i++){
            echo '                                    <div class="col-12 col-sm-6 col-md-4" >
                                        <div class="card h-100 " >
                                            <img src="../img/'.$category[$i]["image"].'" class="card-image card-img-top p-2" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title nameOrder">'.$category[$i]["name"].'</h5>
                                                <p class="card-text descriptOrder">
                                                    '.$category[$i]["description"].'
                                                </p>
                                                <div class="weight mb-2">
                                                    <span class="card-weight">'.$category[$i]["weight"].'<b>gr</b></span>
                                                </div>
                                                <div class="row">
                                                    <div class="productPriceWeight col-6">
                                                        <span class="card-price">$'.$category[$i]["cost"].'</span>
                                                    </div>
                                                    <div class="d-flex col-6">
                                                          <input class="item-quantity-input" style="width: 40px" type="number" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <small class="text-muted">
                                                    <button class="buttonOrder btn-danger offset-4 shop-item-button">Order</button>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
';
        }

    }
?>
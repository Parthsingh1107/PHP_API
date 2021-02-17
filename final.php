<?php
$con = mysqli_connect("localhost","root","","desk");
$response = array();
if($con){
    $sql = "select * from info";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['name'] = $row ['name'];
            $response[$i]['last name'] = $row ['last name'];
            $response[$i]['height'] = $row ['height'];
            $response[$i]['weight'] = $row ['weight'];
            $response[$i]['batch'] = $row ['batch'];
            $response[$i]['description'] = $row ['description'];
            $response[$i]['address'] = $row ['address'];
            $response[$i]['city'] = $row ['city'];
            $response[$i]['province'] = $row ['province'];
            $response[$i]['country'] = $row ['country'];
            $response[$i]['phone'] = $row ['phone'];
            $response[$i]['email'] = $row ['email'];
            $response[$i]['website'] = $row ['website'];
            $response[$i]['mad100'] = $row ['mad100'];
            $response[$i]['mad105'] = $row ['mad105'];
            $response[$i]['mad110'] = $row ['mad110'];
            $response[$i]['mad120'] = $row ['mad120'];
            $response[$i]['mad125'] = $row ['mad125'];
            $response[$i]['mad200'] = $row ['mad200'];
            $response[$i]['mad225'] = $row ['mad225'];
            $response[$i]['status'] = $row ['status'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

}
else{
    echo "Database Connection Failed";
}
?>
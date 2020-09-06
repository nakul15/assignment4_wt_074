<?php

class RestaurantDataDetails {
    
    private $restaurantList;

    function __construct(array $restaurantList) {
        if (sizeof($restaurantList)>0) {
            $this->restaurantList = $restaurantList;
        } else {
            throw new Exception("Records are not available for Menu");
        }
    }

    public function getmenuid() {
        $menuNameList = [];

        foreach($this->restaurantList as $dropdownmenu) {
            $restaurantNameList[] = array(
                "id"=>$dropdownmenu['id']
            );
        }

        return json_encode($restaurantNameList);
    }

    public function getMenuDetails($id){
        $response=["Invalid choice"];
        if($id){
            foreach($this->restaurantList as $dropdownmenu)
            {
                
                if($id == $dropdownmenu['id'])
                {
                    $response=$dropdownmenu;
                    break;
                }
            }
        }
        return json_encode($response);
    }

    
}
?>
<?php
namespace App\Components;


class Recursive{
    private $htmlSelect = '';
    private $data;
    function __construct($data) {
        $this->data = $data;
    }

    public function categoryRecursive($parent_id,$id = 0,$text = ''){
        foreach ($this->data as $value) 
        {
            if($value['parent_id'] ==$id){
                if(!empty($parent_id) && $parent_id == $value['category_id']) {
                    $this->htmlSelect .= "<option selected value='".$value['category_id']."'>".$text.$value['category_name']."</option>";
                } else{
                    $this->htmlSelect .= "<option value='".$value['category_id']."'>".$text.$value['category_name']."</option>";
                }
                $this->categoryRecursive($parent_id,$value['category_id'], $text.'--');
            }
        }
        return $this->htmlSelect;
    }
}
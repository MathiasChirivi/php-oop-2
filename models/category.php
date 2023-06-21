<?php 

    class Categoria {

        public $name;
        public $icon; 

        public function __construct($name)
        {
            $this->name = $name;
            if($name == 'Cane'){
                $this->icon = '<i class="fa-solid fa-dog fa-bounce" style="color: #000000;"></i>';
            }else if($name == 'Gatto'){
                $this->icon = '<i class="fa-solid fa-cat fa-bounce" style="color: #000000;"></i>';
            }else{
                $this->icon = '';
            }
        }
    }

?>
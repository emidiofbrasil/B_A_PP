<?php
/*
@Jose_Emidio_Francelino
@02_Jun_2021
@class_View_II
******************************** */
namespace View;

class View_II 
    {
        Public $Dataview; // Variables
        Public $Viewdata; // Template
        Public $Page;     // Fusion Variables and Templates
        function __construct()
        {
            if ( func_num_args() > 1){
                foreach (func_get_args() as $key => $value)
                {
                    if (gettype($value)=="array")
                    {
                        $this->Dataview=$value;

                    } else if (gettype($value)=="string"){

                        $this->Viewdata=$value;
                    }
                }
                $this->funsionData();      
            } else { $this->Page="Nothing";}
        }
        function funsionData()
        {
            $this->Page = $this->Viewdata;
            foreach ($this->Dataview as $key => $value){

                $this->Page = preg_replace("/".$key."/", $value, $this->Page);
            }
        }
    }
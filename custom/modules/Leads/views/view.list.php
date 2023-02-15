<?php
require_once 'modules/Leads/views/view.list.php';

class CustomLeadsViewList extends LeadsViewList{

    protected function _displayJavascript()
    {           
                echo '<script type="text/javascript" src="BVWhatsApp/main.js"></script>';   

                parent::_displayJavascript();
             
    }

    public function preDisplay(){
        parent::preDisplay();
        $this->lv->actionsMenuExtraItems[] = $this->getNewActionMenuItem();
    }

    private function getNewActionMenuItem(){
        global $mod_strings;
        return '<a id="bv_mass_whatsapp" onclick="return listviewmasswhatsapp()">BV Mass WhatsApp</a>';

    
    }
}
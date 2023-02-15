<?php
require_once 'modules/Accounts/views/view.list.php';

class CustomAccountsViewList extends AccountsViewList{

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
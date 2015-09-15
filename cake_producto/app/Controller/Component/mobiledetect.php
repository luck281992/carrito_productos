<?php  
class MobiledetectComponent extends Object 
{ 
    var $isMobile = false;

   

    function startup(&$controller) 
    { 
        $this->controller =& $controller; 
    } 

    function detect() 
    { 
         
        App::import( 'Vendor', 'WURFL', array( 'file' => 'WURFLManagerProvider.php'));  
         
        $wurflConfigFile = CONFIGS.'wurfl/wurfl-config.xml'; 

        $wurflManager = WURFL_WURFLManagerProvider::getWURFLManager($wurflConfigFile); 
         
        $requestingDevice = $wurflManager->getDeviceForHttpRequest($_SERVER); 

        if($requestingDevice->getCapability('is_wireless_device') == 'true') 
        { 
                        $this->isMobile = true; 
            $this->setMobile(); 
                        $this->controller->theme = 'mobile'; 
                  $this->controller->layoutPath = 'mobile'; 
        } 
         
        
    } 
} 
?>
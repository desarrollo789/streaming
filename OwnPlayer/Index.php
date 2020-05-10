<?php 
    include '/opt/lampp/htdocs/WebSites/streaming/OwnPlayer/model/cover.php';
//     $value = 0;
    if(isset($_POST['sentpage'])) {
//         var_dump($_REQUEST);
        $value = $_POST['sentpage'];              
        switch ($value) {
            case 'page0':
                index();
            break;
            
            case 'page1':
                page1();
            break;
            
            case 'page2':
                page2();    
            break;
            
            case 'page3':
                page3();
                break;
                
            case 'page4':
                page4();
                break;
                
            case 'page5':
                page5();
                break;
                
            case 'page6':
                page6();
                break;
                
            case 'page7':
                page7();
                break;
            
            default:
                index();
                ;
            break;
        }
            
        die;    
    }
    
    else {
        index();
    }
    
    function index() {
        $parameter = 'page0';
        $url = Loadredirecturl($parameter);
        include $url;
    }    
    function page1() {
        $parameter = 'page1';
        $url = Loadredirecturl($parameter);
        include $url;
    }
    function page2() {
        $parameter = 'page2';
        $url = Loadredirecturl($parameter);
        include $url;
    }
    function page3() {
        $parameter = 'page3';
        $url = Loadredirecturl($parameter);
        include $url;
    }
    function page4() {
        $parameter = 'page4';
        $url = Loadredirecturl($parameter);
        include $url;
    }
    function page5() {
        $parameter = 'page5';
        $url = Loadredirecturl($parameter);
        include $url;
    }
    function page6() {
        $parameter = 'page6';
        $url = Loadredirecturl($parameter);
        include $url;
    }
    function page7() {
        $parameter = 'page7';
        $url = Loadredirecturl($parameter);
        include $url;
    }

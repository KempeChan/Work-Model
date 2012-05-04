<?php
    /**
     * Session Helper
     */
    class SessionHelper {
        
        private function Start(){
            session_start();
        }
                
        private function Set($key, $value){
            
            $_SESSION[$key] = $value;
        }
        
        private function Read($key){
            return $_SESSION[$key];
        }
        
        private function is_Set($key){
            return isset($_SESSION[$key]);
        }
        
        private function AllSessions(){
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
        }      
        
        private function ClearOneSession($key){
            unset($key);
        }
        
        private function Clear()
        {
            session_destroy();
        }
        
    }
    
?>
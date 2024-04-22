<?php
function checkmaintenanceColors($connection) {
    $resultaat = $connection->query("SELECT Colors FROM tblmaintenance");
    return ($resultaat->num_rows == 0) ? false : $resultaat->fetch_assoc()['Colors'];
}

function maintenanceColors($connection) {
        $sql = "UPDATE tblmaintenance set Colors = 1";
        return ($connection->query($sql));
    }

function unmaintenanceColors($connection) {
        $sql = "UPDATE tblmaintenance set Colors = 0";
        return ($connection->query($sql));

    }


function checkmaintenanceSpaceInvaders($connection) {
        $resultaat = $connection->query("SELECT SpaceInvaders FROM tblmaintenance");
        return ($resultaat->num_rows == 0) ? false : $resultaat->fetch_assoc()['SpaceInvaders'];
    }
    
    function maintenanceSpaceInvaders($connection) {
            $sql = "UPDATE tblmaintenance set SpaceInvaders = 1";
            return ($connection->query($sql));
        }
    
    function unmaintenanceSpaceInvaders($connection) {
            $sql = "UPDATE tblmaintenance set SpaceInvaders = 0";
            return ($connection->query($sql));
    
        }
    

function checkmaintenanceTetris($connection) {
            $resultaat = $connection->query("SELECT Tetris FROM tblmaintenance");
            return ($resultaat->num_rows == 0) ? false : $resultaat->fetch_assoc()['Tetris'];
        }
        
        function maintenanceTetris($connection) {
                $sql = "UPDATE tblmaintenance set Tetris = 1";
                return ($connection->query($sql));
            }
        
        function unmaintenanceTetris($connection) {
                $sql = "UPDATE tblmaintenance set Tetris = 0";
                return ($connection->query($sql));
        
                    }
                    
function checkmaintenanceBSC($connection) {
    $resultaat = $connection->query("SELECT BSC FROM tblmaintenance");
    return ($resultaat->num_rows == 0) ? false : $resultaat->fetch_assoc()['BSC'];
}
            
        function maintenanceBSC($connection) {
            $sql = "UPDATE tblmaintenance set BSC = 1";
            return ($connection->query($sql));
        }
            
        function unmaintenanceBSC($connection) {
            $sql = "UPDATE tblmaintenance set BSC = 0";
            return ($connection->query($sql));
            
        }
            
        
function checkmaintenanceSnake($connection) {
        $resultaat = $connection->query("SELECT Snake FROM tblmaintenance");
         return ($resultaat->num_rows == 0) ? false : $resultaat->fetch_assoc()['Snake'];
    }
        
        function maintenanceSnake($connection) {
                $sql = "UPDATE tblmaintenance set Snake = 1";
                return ($connection->query($sql));
            }
        
        function unmaintenanceSnake($connection) {
                $sql = "UPDATE tblmaintenance set Snake = 0";
                return ($connection->query($sql));
        
            }
        
?>
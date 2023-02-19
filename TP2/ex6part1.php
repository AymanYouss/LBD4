<?php

                $emailData = array("dsdiyfgds@gmail.com", "dsfdsdsfds@outlook.ma", "ahanane@ana.com");
                   
                $stats = array();
                foreach($emailData as $val){
                    $temp = explode(".", $val)[1];
                    if( array_key_exists($temp, $stats)){
                        $stats[$temp] ++;
                    }
                    else{
                        $stats[$temp] = 1;
                    }
                }

                print_r($stats);
                
            ?>
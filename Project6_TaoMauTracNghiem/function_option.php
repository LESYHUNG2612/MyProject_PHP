[function_option.php]

<?php
            $data = file('option.txt') or die('Cannot read file');
            array_shift($data);
            $arrOptions = array();
            foreach ($data as $key => $value) {
                        $tmpArr = explode('|', $value);
                        $questionID     = $tmpArr[0];
                        $optionID                    = $tmpArr[1];
                        $answer                                   = $tmpArr[2];
                        $point                          = $tmpArr[3];

                        $arrOptions[$questionID][$optionID]['option'] = $answer;           
                        $arrOptions[$questionID][$optionID]['point'] = $point;     
            }
?>
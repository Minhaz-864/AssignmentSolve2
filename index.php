<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        function strToArray($haystack){
            $haystackLength = mb_strlen($haystack);
            for ($index = 0; $index < $haystackLength; $index++) 
            {
                $char = mb_substr($haystack, $index, 1);
                $output[$index] =  $char;
            }
            return $output;
        }

        function findOccurrences($haystack, $needle){

            $occurrence = 0;
            $haystackArray = strToArray($haystack);
            foreach($haystackArray as $key=>$singlePosition){
                $searchAbleNeedle = "";
                for($increment = 0; $increment< strlen($needle); $increment++){
    
                    if(isset($haystackArray[$key + $increment])){
    
                        $searchAbleNeedle = $searchAbleNeedle . $haystackArray[$key + $increment];
                    }
                }
                if($searchAbleNeedle == $needle){
                    $occurrence ++;
                }
                
            }
            return "Here the pattern (". $needle . ") appears in text (".$haystack.") ".$occurrence." times .";
        }

        echo findOccurrences('tadadatataetadatadadatafa', 'data');
    ?>
</body>
</html>
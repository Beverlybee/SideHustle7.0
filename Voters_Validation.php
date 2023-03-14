<?php
//Validation Logic
    $age = 19;
    $pvc = "yes";
    $ward = "020";
    
    if($age > 18 && $pvc == "yes" && $ward = "020"){
        echo "Voter eligible to vote.";
    } elseif($age > 18 && $pvc == "yes" && $ward != "020"){
        echo "This is not voter's ward";
    } elseif($age <= 18 && $pvc == "yes" && $ward == "020"){
        echo "Voter is too young to vote.";
    } elseif($age > 18 && $pvc == "no" && $ward == "020"){
        echo "Voter does not have PVC.";
    }else{
        echo "Voter does not meet any of the eligibility requirements to vote.";
    }
?>
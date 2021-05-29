<?php
    while($row = mysqli_fetch_assoc($result)){

        $output .= '<a id="'.$row['user_id'].'">
                        <div class="content">
                            <img src="php/images/'. $row['img'] .'" alt="">
                            <div class="info">
                                <span>'. $row['fname']. " " . $row['lname'] .'</span>
                            </div>
                        </div>
                            <button id="'. $row['user_id'] .'" class="confirm-icon"><i class="fas fa-check fa-1g"></i></button>
                            <button id="'. $row['user_id'] .'" class="delete-icon"><i class="fas fa-trash fa-1g"></i></button>
                    </a>';
    }
?>
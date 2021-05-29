<?php
    while($row = mysqli_fetch_assoc($result)){

        if($userid!=$row['user_id']){
            $output .= '<a id="'.$row['user_id'].'">
                            <div class="content">
                                <img src="php/images/'. $row['img'] .'" alt="">
                                <div class="info">
                                    <span>'. $row['fname']. " " . $row['lname'] .'</span>
                                </div>
                            </div>
                                <button id="'. $row['user_id'] .'" class="confirm-icon" onclick="send_request(this.id)"><i class="fas fa-user-plus"></i></button>
                        </a>';
        }
    }
?>
<?php
    while($row = mysqli_fetch_assoc($result)){

        $output .= '<a>
                        <div class="content">
                            <img src="php/images/'. $row['img'] .'" alt="">
                            <div class="info">
                                <span>'. $row['fname']. " " . $row['lname'] .'</span>
                            </div>
                        </div>
                            <span class="confirm-icon"><i class="fas fa-check fa-1g"></i></span>
                            <span class="delete-icon"><i class="fas fa-trash fa-1g"></i></span>
                    </a>';
    }
?>
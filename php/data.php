<?php
    while($row = mysqli_fetch_assoc($result)){
        $sql = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['user_id']}
                OR outgoing_msg_id = {$row['user_id']}) AND (outgoing_msg_id = $userid
                OR incoming_msg_id = $userid) ORDER BY msg_id DESC LIMIT 1;";
        $query = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_assoc($query);

        if (mysqli_num_rows($query) > 0) {
            $msg = $row2['msg'];
            if (strlen($msg) > 28) {
                $msg = substr($msg, 0, 28) . '...';
            } 
        } else {
            $msg = "No message available";
        }

        if(isset($row2['outgoing_msg_id'])){
            ($userid == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }

        ($row['status'] == "Offline") ? $offline = "offline" : $offline = "";

        $output .= '<a href="chat.php?user_id='. $row['user_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="info">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span><br>
                        <span style="font-size: 16px; opacity: 0.7;">'. $you . $msg .'</span>
                    </div>
                    </div>
                    <div class="status-dot'.$offline.'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>
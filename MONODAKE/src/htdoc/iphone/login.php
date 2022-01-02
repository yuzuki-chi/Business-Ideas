<?php
/**
 * 一時的措置. このIDだけ受け付けます。
 */
function cert_user($user_id, $user_pw) {
    if($user_id == "testuser") {
        if($user_pw == "password") {
            return true;
        }
    } else {
        return false;
    }
}
if (cert_user($_POST['user_id'], $_POST['user_pw']))
    header("Location: ./portal.php");
else 
    header("Location: ./index.php?s=-1");
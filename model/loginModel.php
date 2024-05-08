<?php



function attemptUserLogin (PDO $db, string $name, string $pwd) : bool | string {
    $sql = "SELECT *
    FROM `users`
    WHERE `user_name` = ?";

$stmt = $db->prepare($sql);

    try {
        $stmt->execute([$name]);
            if($stmt->rowCount()===0) return false;
                $result = $stmt->fetch();

            if (password_verify($pwd, $result['user_pwd'])) {
                $_SESSION = $result;
                unset($_SESSION['user_pwd']);
                $_SESSION['id'] = session_id();
                return true;
            }else {
                return false;
            }
    }catch (Exception $e) {
        return $e->getMessage();
    }
}
<?php
class Valid {
    function username() {
        return preg_match(/[^@]+@[^@]+/i);
    }
    function email() {
        return preg_match(/[^@]+@[^@]+/i);
    }
    function password() {
        return preg_match(/[^@]+@[^@]+/i);
    }
}
?>

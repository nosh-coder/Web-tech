<?php
class ValidationModel {
    public static function username($u){ return strlen($u) >= 3; }
    public static function email($e){ return filter_var($e, FILTER_VALIDATE_EMAIL); }
    public static function password($p){ return strlen($p) >= 6; }
}
?>
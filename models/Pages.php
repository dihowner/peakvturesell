<?php
class Pages extends Utility {
    protected $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getPage(string $pageName): string {
        return ucfirst($pageName);
    }
}
?>
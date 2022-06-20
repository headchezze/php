<?php
    include_once('model/db.php');

    function reviewById(string $id) {
        $sql = "SELECT * FROM reviews WHERE product_id=:product_id";
        $query = dbQuery($sql, ['product_id' => $id]);
        return $query->fetchAll();
    }

    function addReview(string $id, string $text) {
        $sql = "INSERT INTO `reviews`(`product_id`, `text`) VALUES ('$id','$text')";
        $query = dbQuery($sql);
        return $query;
    }

    function deleteReview(string $id) {
        $sql = "DELETE FROM `reviews` WHERE id=:id;";
        dbQuery($sql, ['id' => $id]);
    }

    function editReview(string $id, string $text) {
        $sql = "UPDATE `reviews` SET `text`='$text' WHERE id=:id";
        dbQuery($sql, ['id' => $id]);
    }




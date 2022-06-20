<?php
    include_once 'model/products.php';
    include_once 'model/reviews.php';

    $id = $_GET['id'];

    if (!$id) {
        header('location: /index.php');
    }

    $product = productById($id)[0];
    $reviews = reviewById($id);

    if(array_key_exists('add-review', $_POST)) {
        addReview($id ,$_POST['review_text']);
        header("Refresh: 0");
        die();
    } else if(array_key_exists('delete-review', $_POST)) {
        deleteReview($_POST["id"]);
        header("Refresh: 0");
        die();
    } else if(array_key_exists('edit-review', $_POST)) {
        editReview($_POST["id"], $_POST["changed_review_text"]);
        header("Refresh: 0");
        die();
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if ($product): ?>
    <div style="display:flex;flex-direction: column;">
        <strong><?=$product['name']?></strong>
        <div>
            <?=$product['description']?>
        </div>
        <div>
            Цена: <?=$product['price']?>
        </div>
        <img src="<?=$product['image']?>" alt="" height="200px" style="object-fit: cover;width: fit-content">
    </div>

    <form method="post">
        <span>Ваш отзыв: </span>
        <input type="text" name="review_text">

        <button name="add-review" type="submit">Отправить</button>
    </form>

<?php else: ?>
    <div>
        Не найдено товара с id = <?=$id?>
    </div>
<?php endif; ?>

<?php if ($reviews): ?>
    <div style="display:flex;flex-direction: column;gap: 12px; margin-top: 24px;">
        <? foreach ($reviews as $review): ?>
            <div style="display:flex;justify-content:space-between;border: 1px solid black; padding: 12px">
                <form method="post">
                    <input type='hidden' name='id' value="<?=$review['id']?>" />
                    <input type="text" name="changed_review_text" value="<?=$review['text']?>">
                    <button name="edit-review" type="submit">Изменить</button>
                </form>
                <div>
                    <form method="post">
                        <input type='hidden' name='id' value="<?=$review['id']?>" />
                        <input type="submit" name="delete-review" value="None">
                    </form>
                </div>
            </div>
        <?endforeach;?>
    </div>
<?php else: ?>
    <div>
        Отзывов нет
    </div>
<?php endif; ?>
</body>
</html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
    echo '<div class="list-items">';

    function getCatalog() {
        $db_connection = mysqli_connect("phptask", "user", "psswrd", "bd");
        $query = "SELECT * from menu";
        $result = mysqli_query($db_connection, $query);
        $catalog = [];

        foreach ($result as $row){
            $catalog[$row['id']]['main_catalog'] = $row['catalog_id'];
            $catalog[$row['id']]['name'] = $row['name'];
            $catalog[$row['id']]['childrens'] = [];

            if (is_null($row['']))
                continue;

            $catalog[$row['catalog_id']]['childrens'][$row['id']] = $row['id'];
        }

        mysqli_close($db_connection);

        return $catalog;
    }

    $catalog = getCatalog();

    foreach($catalog as $item) {
        if($item['main_catalog'] == '') {
            renderMenu($catalog, $item);
        }
    }

    function renderMenu($catalog, $catalog_item) {
        if(count($catalog_item['childrens'])) {
            echo '
                <div class="list-item list-item_open" data-parent>
                    <div class="list-item__inner">
                        <img class="list-item__arrow"
                            src="./chevron-down.png"
                            alt="arrow" 
                            data-open
                        >
        
                        <img class="list-item__folder"
                            src="./folder.png"
                            alt="folder"
                        >
        
                        <span class="list-item__text">
                            ' . $catalog_item['name'] . '
                        </span>
                    </div>
          
                <div class="list-item__items">';

            foreach($catalog_item['childrens'] as $children) {
                renderMenu($catalog, $catalog[$children]);
            }

            echo `</div> </div>`;
        } else {
            echo '
                <div class="list-item__inner">
                    <img class="list-item__folder" 
                        src="./folder.png"
                        alt="folder"
                    >
                    <span class="list-item">
                        ' . $catalog_item['name'] . '
                    </span>
                </div>
                    ';
        }
    }
?>
</body>
<script src="index.js"></script>
</html>
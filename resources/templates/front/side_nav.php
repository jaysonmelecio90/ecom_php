<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
        <?php

            $query = "SELECT * FROM categories";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("Query Failed" . mysqli_error($connection));
            }

            // Fetching categories from the database
            while ($row = mysqli_fetch_assoc($result)) {
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];
                echo "<a href='category.php?id={$cat_id}' class='list-group-item'>{$cat_title}</a>";
            }

        ?>

  
    </div>
</div>
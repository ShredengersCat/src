<h1>List of all conference</h1>
<p>
    <form method="post">         
                <?php 
                    while($row = $data->fetch()) {
                        print '<div class="card text-center">'
                        . '<div class="card-header"><h4>'.$row['Title'].'</h4></div>'
                        . '<div class="card-body">'
                        . '<h5 class="card-title">'.$row['Country'].'</h5>'
                        . '<p class="card-text">'.$row['Text'].'</p>'
                        . '<a href="/details/index/'.$row['id'].'" class="btn btn-primary">Info</a>'
                        . '<a href="/details/index/'.$row['id'].'" class="btn btn-primary">Update</a>'
                        . '</div>'
                        . '</div>';
                    }
                ?>
    </form>
</p>
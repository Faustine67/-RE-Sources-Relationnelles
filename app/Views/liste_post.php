<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>
<body>
    <h1>Post</h1> 
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li>
                <?php echo $post['id_post']; ?></br>
                <p><?php echo $post['text']; ?></p>
            </li>  
        <?php } ?>
    </ul>

  <h2> Comments </h2>
    <ul>
    <?php foreach ($comments as $comment) { ?>
            <li>
                <?php echo $comment['id_user'] ?></br>
                <p><?php echo $comment['text'] ?></p>
            </li>  
        <?php } ?>
    </ul> 
</body>
</html>


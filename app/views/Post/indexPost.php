<!doctype html>
    <html lang="en">
<head>
    <?php //echo HTML::style('css/'.$userName.'/style.css');?>
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php

        foreach($posts as $post) {
            echo '<div class="jumbotron">';
            echo '<h1>' .$post['title'].'</h1>';
//            $firstEnd = strpos($post['content'],'.');
//            echo " <p>".substr($post['content'],0,$firstEnd)."</p>";
            echo '<h2><p>'.$post['content'].'</p></h2>';
            echo '<p><a class="btn btn-primary btn-lg" href="'.URL::to('/post/'.$post['_id']).'" role="button">Read More</a></p>';
            $format="F j, Y, g:i a";
            $date = new DateTime($post['created_at']);
            $formatDate = $date->format($format);
            echo '<p>Posted on '.$formatDate.' ';
            foreach($post['tags'] as $key=>$tag)
            {
                echo'<a href="'.URL::to('/tag/'.$tag).'">'.$tag.'</a> ';
            }
            echo'</p>';
            echo'</div>';
        }
    ?>
</div>
</body>
</html>
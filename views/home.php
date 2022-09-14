<?php
    /* things act like they are in the root folder here */
    require 'dbconn.php';
?>

<?php
    require './views/partials/header.php';
?>

<div>
    <?php 
        $postSql = 'SELECT * FROM posts';

        foreach($pdo->query($postSql) as $post) {
    ?>
    
        <p>
            <?php 
                $posterId = $post['user_fk'];
                $posterNameSql = "SELECT name FROM users WHERE user_id='$posterId'";
                $posterName = $pdo->query($posterNameSql)->fetch();
                echo $posterName[0];
            ?>
        </p>
        <h3>
            <?php echo $post['title']; ?>
        </h3>
        <p>
            <?php echo $post['description']; ?>
        </p>
        <figure>
            <img src="./src/uploads/<?php echo $post['image'] ?>" alt="<?php echo $post['title']; ?>">
        </figure>
        <div class="comments">
            <?php 
                $post_id = $post['post_id'];
                $commentSql = "SELECT * FROM comments WHERE fk_target = '1' AND fk = '$post_id' ORDER BY likes, date DESC";

                foreach($pdo->query($commentSql) as $comment) {
            ?>
                <div class="comment">
                    <p>
                        <?php 
                            $commenterId = $comment['user_fk'];
                            $commenterNameSql = "SELECT name FROM users WHERE user_id='$commenterId'";
                            $commenterName = $pdo->query($commenterNameSql)->fetch();
                            echo $commenterName[0];
                        ?>
                    </p>
                    <p>
                        <?php echo $comment['comment'] ?>
                    </p>
                    
                    <div class="subComments">
                        <?php 
                            $comment_id = $comment['comment_id'];
                            $subCommentSql = "SELECT * FROM comments WHERE fk_target = '2' AND fk = '$comment_id' ORDER BY date, likes DESC";

                            foreach($pdo->query($subCommentSql) as $subComment) {
                        ?>
                            <div class="subComment">
                                <p>
                                    <?php 
                                        $subCommenterId = $subComment['user_fk'];
                                        $subCommenterNameSql = "SELECT name FROM users WHERE user_id='$subCommenterId'";
                                        $subCommentName = $pdo->query($subCommenterNameSql)->fetch();
                                        echo $subCommentName[0];
                                    ?>
                                </p>
                                <p>
                                    <?php echo $subComment['comment'] ?>
                                </p>
                            </div>
                        <?php
                            }
                        ?>
                    </div> <!-- </Sub Comments> -->
                </div>
            <?php
                }
            ?>
        </div> <!-- </Comments> -->
    <?php
        }
    ?>
</div>

<?php
    require './views/partials/footer.php';
?>
<ol class="timeline">
    <?php
    foreach ($pokeArray as $r)
    {
    ?>
    <li class="post">
        <div class="profile_pic">
            <?= $TWML->profile_pic($r["user_poking"], array ( "linked" => false, "size" => "bigger")); ?>
        </div>
        <div class="content_holder">
            <?= $TWML->name($r["user_poking"], array ("firstnameonly"=>true)); ?>
            <br/>
            <?= $r["text"]; ?>
            <br/>
            retaliate | brawl | view
        </div>
    </li>
    <?php
    }
    ?>
</ol>

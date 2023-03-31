<h1>Результаты поиска: </h1>
<ol>
    <?php
    foreach ($users as $User) {
        
        echo '<li>' . $User->login .':'.' '. $User->id_role . '</li>';
    }
    ?>
</ol>
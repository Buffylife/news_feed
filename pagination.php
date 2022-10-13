<?php
require 'safemysql.class.php';
$db = new safeMysql();
$per_page = 5;
$cur_page = 1;
if (isset($_GET['page']) && $_GET['page'] > 0) 
{
    $cur_page = $_GET['page'];
}

$start = ($cur_page - 1) * $per_page;
$sql  = "SELECT SQL_CALC_FOUND_ROWS * FROM `news` ORDER BY `idate` DESC LIMIT ?i, ?i";
$data = $db->getAll($sql, $start, $per_page);
$rows = $db->getOne("SELECT FOUND_ROWS()");

$num_pages = ceil($rows / $per_page);
$page = 0;
?>
       
<?php foreach ($data as $row): ?>
    <div class="news__article">
            <div class="news__articleHeader">
                <div class="news__articleData">
                <?= date('d.m.Y',$row['idate']) ?>
                </div>    
                <div class="news__articleTitle">
                <a href="view.php?id=<?= $row['id'] ?>" class="news__articleLink"><?= $row['title'] ?></a>
            </div>
        </div> 
            <div class="news__articleDescription">
            <?= $row['announce'] ?>
            </div>    
        </div>    
<?php endforeach ?>

<div class="news__page">
    <div class="news__pageTitle">Страницы:</div>   
    <div class="news__pageNum">  
        <?php while ($page++ < $num_pages): ?>
        <?php if ($page == $cur_page): ?>
        <a href="" class="news__pageLink active"><?= $page ?></a>
        <?php else: ?>
        <a href="?page=<?= $page ?>" class="news__pageLink"><?= $page ?></a>
        <?php endif;
        endwhile ?> 
   </div>
</div>
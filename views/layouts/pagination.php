<style>         
            #pagination{
                text-align: right;
                margin-top: 15px;
                margin-right : 35px;
                
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
                border-radius: 7px
            }
            .current-page{
                background: red;
                color: #FFF;
            }
            .clear-both{
                margin-bottom : 15px;
                margin-right : 15px;
                clear : both;
            }
            
        </style>
<div id="pagination">

<?php
if ($current_page > 3) {
    $first_page = 1;
    ?>
    <a class="page-item" style="color :#007bff;text-decoration: none;" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>&name=<?= $search?>"><<</a>
    <?php
}
if ($current_page > 1 ) {
    $prev_page = $current_page - 1;
    ?>
    <a class="page-item" style="color :#007bff;text-decoration: none;" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>&name=<?= $search?>"><</a>
<?php }
?>
<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
            <a class="page-item" style="color :#007bff;text-decoration: none;" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>&name=<?= $search?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalPages - 1) {
    $next_page = $current_page + 1;
    ?>
    <a class="page-item" style="color :#007bff;text-decoration: none;" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>&name=<?= $search?>">></a>
<?php
}
if ($current_page < $totalPages - 3) {
    $end_page = $totalPages;
    ?>
    <a class="page-item" style="color :#007bff;text-decoration: none;" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>&name=<?= $search?>">>></a>
    <?php
}

?>

</div>

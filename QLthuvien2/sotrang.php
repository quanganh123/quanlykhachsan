<ul class="pagination justify-content-end">
<?php if ($limit > 1) { 
        $prev_pare = $limit - 1 ?>
        <li class="page-item"><a class="page-link" href="?per-page = <?= $limit ?> & page = <?= $prev_pare ?>">Đầu</a>
        </li>
    <?php } ?>
    <?php for ($i = 1; $i <= $totalRecord / $limit; $i++) { ?>
        <?php
        $offset = ($i - 1) * $limit;
        ?>
        <li class="page-item"><a class="page-link" href="/code/QLthuvien2/index.php?offset=<?php echo $offset ?>"><?php echo $i ?></a></li>
    <?php } ?>
    <?php if ($limit < $totalRecord - 1) {
        $next_page = $totalRecord + 1 ?>
        <li class="page-item"><a class="page-link" href="/code/QLthuvien2/index.php?offset=<?php echo $offset ?>">Cuối</a></li>
    <?php } ?>
</ul>
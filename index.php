<?php
/**
 * 大气
 *
 *
 * @package G
 * @author YOURAN
 * @version 1.5
 * @link https://gundam.exia.xyz/
 */

 $this->need('header.php');
 ?>
<div id="article" class="clear">
  <div id="article-content">

    <?php  $this->need('IndexSwitcher.php'); ?>

    <div id="pages" class="clear">
      <?php $this->pageLink('更多 >','next'); ?>
      <?php $this->pageLink('< 返回','prev'); ?>
    </div>

  </div>
</div>




  <?php $this->need('footer.php'); ?>

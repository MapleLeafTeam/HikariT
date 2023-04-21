<?php 
/**
 * links
 * 
 * @package custom 
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
	$this->need('header.php');
$this->need('sidebar.php'); ?>

<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="page-title-box">
<h4 class="page-title"><?php $this->title(); ?></h4>
</div>
</div>



<div class="col-12">
<div class="card d-block">
<div class="card-body">

<?php $this->links(); ?>
</div> </div> </div>


<div class="col-12">




<?php $this->need('comments.php'); ?>







</div> 



</div>









</div>

</div>











<?php $this->need('footer.php'); ?>

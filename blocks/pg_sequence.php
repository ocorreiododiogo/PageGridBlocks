<?php namespace ProcessWire; ?>


<?php if($page->pg_sequence->first()) { ?>

<canvas id="pg-sequence-canvas" data-count="<?= $page->pg_sequence->count() ?>" data-url="<?= $page->pg_sequence->url() ?>" data-type="jpg" />

<!--load js inside backend-->
<?php if($pagegrid->isBackend()){ 
$filename= wire('config')->urls->templates.'blocks/'.$page->template->name.'.js';
echo '<script type="text/javascript" src="'.$filename.'"></script>';
} 
?>
<!--END load js inside backend-->

<?php } ?>

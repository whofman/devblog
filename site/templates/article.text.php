<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <article>
    	<header>
        <h1><?php echo html($page->title()) ?></h1>
        <div class="meta">
          <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F dS, Y'); ?></time>
          <?php if($page->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($page->tags()) as $tag): ?>
             <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </header>
      <div class="content">
		    <?php echo kirbytext($page->text()) ?>
      </div>
	  
	  <div class="related">
		<?php if(!$page->related()->empty()): ?>
			<h3>Related Posts</h3>
			<ul>
			<?php foreach($page->related()->pages() as $item): ?>
			   <li>
			      <a href="<?php echo $item->url() ?>"> <?php echo $item->title()->html() ?> </a>
			   </li>
			<?php endforeach ?>
			</ul>
		<?php endif ?>
	  </div>
	  
      <footer>
	    <nav class="nextprev cf" role="navigation">
	       <?php if($prev = $page->prevVisible()): ?> 
	         <a class="prev" href="<?php echo $prev->url() ?>">&larr; vorige</a>
	       <?php endif ?>
	       <?php if($next = $page->nextVisible()): ?> 
	         <a class="next" href="<?php echo $next->url() ?>">volgende &rarr;</a>
	       <?php endif ?>
	    </nav>
		
      </footer>
    </article>

  </main>

<?php snippet('footer') ?>
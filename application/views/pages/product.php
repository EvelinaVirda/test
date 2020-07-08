</div>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="card-deck">
				<?php foreach ($product as $p) : ?>
					<div class="card border-primary mb-3">
						<img width="100%" src="<?= base_url('assets/img/product/').$p['image']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?= $p['name']; ?></h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Last updated 3 mins ago</small>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>

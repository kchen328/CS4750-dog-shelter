<?php 
session_start();
include('containers/header.php');
?>
<title>Dog Shelter Database</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<script src="js/search.js"></script>
<link rel="stylesheet" href="../css/style.css">
<?php include('containers/container.php');?>
<div class="container">		
	<h2>Available Dogs</h2>
	<?php
	include 'main/Dog.php';
	$dog = new Dog();	
	?>	
	<div class="row">
	<div class="col-md-3">                    
		<div class="list-group">
			<h3>Price</h3>	
			<div class="list-group-item">
				<input id="priceSlider" data-slider-id='ex1Slider' type="text" data-slider-min="50" data-slider-max="500" data-slider-step="1" data-slider-value="14"/>
				<div class="priceRange">50 - 500</div>
				<input type="hidden" id="minPrice" value="0" />
				<input type="hidden" id="maxPrice" value="500" />                  
			</div>			
		</div>    
		<div class="list-group">
			<h3>Breed</h3>
			<div class="breedSection">
				<?php
				$Dog_breed = $dog->getBreed();
				foreach($Dog_breed as $breedDetails){	
				?>
				<div class="list-group-item checkbox">
				<label><input type="checkbox" class="dogDetail Dog_breed" value="<?php echo $breedDetails["Dog_breed"]; ?>"  > <?php echo $breedDetails["Dog_breed"]; ?></label>
				</div>
				<?php }	?>
			</div>
		</div>
		<div class="list-group">
			<h3>Color</h3>
			<?php			
			$color = $dog->getColor();
			foreach($color as $colorDetails){	
			?>
			<div class="list-group-item checkbox">
			<label><input type="checkbox" class="dogDetail color" value="<?php echo $colorDetails['color']; ?>" > <?php echo $colorDetails['color']; ?></label>
			</div>
			<?php    
			}
			?>
		</div>    
		<div class="list-group">
			<h3>Size</h3>
			<?php
			$dog_size = $dog->getSize();
			foreach($dog_size as $sizeDetails){	
			?>
			<div class="list-group-item checkbox">
			<label><input type="checkbox" class="dogDetail dog_size" value="<?php echo $sizeDetails['dog_size']; ?>"  > <?php echo $sizeDetails['dog_size']; ?></label>
			</div>
			<?php
			}
			?> 
		</div>
	</div>
	<div class="col-md-9">
	 <br />
		<div class="row searchResult">
		</div>
	</div>
    </div>	
</div>	
<?php include('containers/footer.php');?>
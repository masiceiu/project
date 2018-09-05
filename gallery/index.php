<?php include'inc/header.php';?>
<?php $_photo='img/no_img.png';$site_url=''; ?>
<div class="row" style="margin: 0px">
	<div class="panel-body" style="padding: 5px">
		<ul id="filters" class="media-filter">
			<li><a href="#" data-filter="*"> All</a></li>
			<li><a href="#" data-filter=".images">Images</a></li>
			<li><a href="#" data-filter=".audio">Audio</a></li>
			<li><a href="#" data-filter=".video">Video</a></li>
			<li><a href="#" data-filter=".documents">Documents</a></li>
		</ul>

		<div class="btn-group pull-right">
			<button type="button" class="btn btn-white btn-sm"><i class="fa fa-check-square-o"></i> Select all</button>
			<button  href="<?php echo$site_url?>/administrator/upload/" type="button" class="btn btn-white btn-sm fancybox fancybox.ajax">
			<i class="fa fa-folder-open"></i> Add New</button>
			<button type="button" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
		</div>
		<a data-toggle="modal" href="<?php echo$site_url?>/administrator/upload/" type="button" class="btn pull-right btn-sm" data-target="#myModal1">
		<i class="fa fa-upload"></i> Upload New File</a>

		<div id="gallery" class="media-gal isotope" style="position: relative; overflow: hidden; height: 788.484px;">
			<div class="images item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
					</a>
				<p>img01.jpg </p>
			</div>

			<div class="audio item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(246px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
					</a>
				<p>img02.jpg </p>
			</div>

			<div class="video item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(492px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
					</a>
				<p>img03.jpg </p>
			</div>

			<div class="images audio item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(737px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
					</a>
				<p>img04.jpg </p>
			</div>

			<div class="images documents item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(983px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
					</a>
				<p>img05.jpg </p>
			</div>

			<div class="audio item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 263px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
					</a>
				<p>img01.jpg </p>
			</div>

			<div class="documents item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(246px, 263px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
				</a>
				<p>img02.jpg </p>
			</div>
			<div class="video item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(492px, 263px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
				</a>
				<p>img03.jpg </p>
			</div>

			<div class="images item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(737px, 263px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
				<img src="<?php echo$_photo?>" alt="">
				</a>
				<p>img04.jpg </p>
			</div>

			<div class="documents item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(983px, 263px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
					<img src="<?php echo$_photo?>" alt="">
				</a>
				<p>img05.jpg </p>
			</div>

			<div class="video item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 526px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
					<img src="<?php echo$_photo?>" alt="">
				</a>
				<p>img01.jpg </p>
			</div>

			<div class="audio images item  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(246px, 526px, 0px) scale3d(1, 1, 1); opacity: 1;">
				<a href="#myModal" data-toggle="modal">
					<img src="<?php echo$_photo?>" alt="">
				</a>
				<p>img02.jpg </p>
			</div>

		</div>

		<div class="col-md-12 text-center clearfix">
			<ul class="pagination">
				<li><a href="#">«</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">»</a></li>
			</ul>
		</div>
		<!-- http://stackoverflow.com/questions/18378720/bootstrap-3-with-remote-modal -->
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Edit Media Gallery</h4>
					</div>

					<div class="modal-body row">
						<div class="col-md-5 img-modal">
							<img src="<?php echo$_photo?>" alt="">
							<p>
							<a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit Image</a>
							<a href="#" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> View Full Size</a>
							</p>
							<p class="mtop10"><strong>File Name:</strong> img01.jpg</p>
							<p><strong>File Type:</strong> jpg</p>
							<p><strong>Resolution:</strong> 300x200</p>
							<p><strong>Uploaded By:</strong> <a href="#">ThemeBucket</a></p>
						</div>
						<div class="col-md-7">
							<div class="form-group">
								<label> Name</label>
								<input id="name" value="img01.jpg" class="form-control">
							</div>
							<div class="form-group">
								<label> Tittle Text</label>
								<input id="title" value="awesome image" class="form-control">
							</div>
							<div class="form-group">
								<label> Description</label>
								<textarea rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label> Link URL</label>
								<input id="link" value="images/gallery/img01.jpg" class="form-control">
							</div>
							<div class="pull-right">
								<button class="btn btn-danger" type="button">Delete</button>
								<button class="btn btn-primary" type="button">Save changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- modal -->	
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
				
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>	
<script type="text/javascript" src="js/jquery.isotope.js"></script>	
<script type="text/javascript">
    $(function() {
        var $container = $('#gallery');
        $container.isotope({
            itemSelector: '.item',
			filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        // filter items when filter link is clicked
        $('#filters a').click(function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector});
            return false;
        });
    });
</script>
<style>
/*gallery*/

.media-filter {
    float: left;
    margin: 10px 0;
    padding-left: 0;
}

.media-filter li{
    float: left;
    margin-right: 10px;
    list-style: none;
}

.media-filter li a{
    background: #e6e6e6;
    padding: 5px 10px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
}

.media-filter li a:hover, .media-filter li a:focus{
    background: #1FB5AD;
    color: #fff;
}

.media-gal {
    float: left;
    width: 100%;
    margin-top: 20px;
}
.media-gal .item {
    float: left;
}

.media-gal .item {
    margin-bottom: 1%;
    margin-right: 1%;
    width: 233px;
    padding: 10px;
    border: 1px solid #ddd;
}

.media-gal .item p {
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.media-gal .item img {
    height: 200px;
    width: 100%;
}

.img-modal img{
    width: 100%;
    margin-bottom: 10px;
}

/* Start: Recommended Isotope styles */

/* Isotope Filtering */

.isotope-item {
    z-index: 2;
}

.isotope-hidden.isotope-item {
    pointer-events: none;
    z-index: 1;
}

/*Isotope CSS3 transitions */

.isotope,
.isotope .isotope-item {
    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    -ms-transition-duration: 0.8s;
    -o-transition-duration: 0.8s;
    transition-duration: 0.8s;
}

.isotope {
    -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
    -ms-transition-property: height, width;
    -o-transition-property: height, width;
    transition-property: height, width;
}

.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    -ms-transition-property: -ms-transform, opacity;
    -o-transition-property: -o-transform, opacity;
    transition-property: transform, opacity;
}

/*disabling Isotope CSS3 transitions */

.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -ms-transition-duration: 0s;
    -o-transition-duration: 0s;
    transition-duration: 0s;
}

/* End: Recommended Isotope styles */

/* disable CSS transitions for containers with infinite scrolling*/
.isotope.infinite-scrolling {
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none;
}
</style>
<?php include'inc/footer.php';?>
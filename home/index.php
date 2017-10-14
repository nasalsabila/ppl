<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include '../header.php'; ?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
				<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="mainNavbar">
			<ul class="nav navbar-nav">
		    	<li class="active"><a href="#">Home</a></li>
		    	<li><a href="#">Catalog</a></li>
		    	<li><a href="#">My Profile</a></li>
		    	<li><a href="#">About Us</a></li>
			</ul>
			<form class="navbar-form navbar-right">
			    <div class="input-group">
			    	<input type="text" class="form-control" placeholder="Search">
			    	<div class="input-group-btn">
			    		<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			    	</div>
			    </div>
	    	</form>
		</div>
	</div>
</nav>
<div class="mainpage row" style="padding: 0px 50px">
	<div class="col-md-3">
		<div class="sideBar" style="height: 500px; padding: 0px 20px;">
			<div class="categories" style="width: 100%">
				<div class="sectionTitle">
					<label>KATEGORI</label>
				</div>
				<ul>
					<li>Novel & Sastra</li>
				</ul>
			</div>
			<div class="userReviews">
				<div class="sectionTitle">
					<label>REVIEW TERBARU</label>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9 page">
		<div class="sectionTitle2">
			<label>Populer</label>
		</div>
		<div id="carousel1" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel1" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel1" data-slide-to="1"></li>
			    <li data-target="#carousel1" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<div class="displayBuku">
						<img src="images/buku-1.JPG" align="center">
						<div class="book-detail">
							<div class="book-name">Wives of War</div>
							<div class="book-author">by Soraya M.Lane</div>
							<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci. Nulla porttitor justo id lorem vulputate, at molestie turpis vestibulum. Fusce ex ipsum, aliquet in ex id, facilisis placerat purus. Aenean mattis nisl tincidunt enim sollicitudin aliquam nec non urna. Aenean lorem ex, pretium vel venenatis vel, iaculis volutpat tellus. Vestibulum maximus lorem libero, eget egestas ligula elementum a.</div>
							<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
							<div class="book-price"><span class="harga">Rp 20.000 / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="displayBuku">
						<img src="images/buku-2.JPG" align="center">
						<div class="book-detail">
							<div class="book-name">FAHRENHEIT 451</div>
							<div class="book-author">by Ray Bradbury</div>
							<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci. Nulla porttitor justo id lorem vulputate, at molestie turpis vestibulum. Fusce ex ipsum, aliquet in ex id, facilisis placerat purus. Aenean mattis nisl tincidunt enim sollicitudin aliquam nec non urna. Aenean lorem ex, pretium vel venenatis vel, iaculis volutpat tellus. Vestibulum maximus lorem libero, eget egestas ligula elementum a.</div>
							<div class="book-owner">Pemilik buku: <span>Tyas Yuni</span> | Kota: <span>Jakarta</span></div>
							<div class="book-price"><span class="harga">Rp 20.000 / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="displayBuku">
						<img src="images/buku-3.JPG" align="center">
						<div class="book-detail">
							<div class="book-name">A Man Called Ove</div>
							<div class="book-author">by Fredrik Backman</div>
							<div class="book-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus vehicula diam, et venenatis nisi aliquet ut. Ut vestibulum sapien vitae blandit ullamcorper. Curabitur eu condimentum turpis. Donec ultrices sit amet dolor eu posuere. In pulvinar, dui in vestibulum tincidunt, arcu nisi suscipit purus, nec luctus nisl mauris et orci. Nulla porttitor justo id lorem vulputate, at molestie turpis vestibulum. Fusce ex ipsum, aliquet in ex id, facilisis placerat purus. Aenean mattis nisl tincidunt enim sollicitudin aliquam nec non urna. Aenean lorem ex, pretium vel venenatis vel, iaculis volutpat tellus. Vestibulum maximus lorem libero, eget egestas ligula elementum a.</div>
							<div class="book-owner">Pemilik buku: <span>Vareza Noorliko</span> | Kota: <span>Meikarta</span></div>
							<div class="book-price"><span class="harga">Rp 20.000 / minggu</span><button type="button" class="btn add-to-cart">Lihat</button></div>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel1" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
    			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel1" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
    			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
</body>
</html>
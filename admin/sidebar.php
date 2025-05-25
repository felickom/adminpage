<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, <?php echo $_SESSION['username']; ?></h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#Banner"  onclick="showBanner()" ><i class="fa fa-picture-o"></i> Banner Video</a>
    <a href="#Company"  onclick="showCompany()" ><i class="fa fa-comments-o"></i> Company At Glance</a>
    <a href="#Visi"  onclick="showVisi()" ><i class="fa fa-check-circle-o"></i> Visi Perusahaan</a>
    <a href="#Misi"  onclick="showMisi()" ><i class="fa fa-briefcase"></i> Misi Perusahaan</a>
    <a href="#Testimoni"  onclick="showTestimoni()" ><i class="fa fa-check"></i> Testimoni</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Category</a>
    <a href="#benefit"   onclick="showBenefit()" ><i class="fa fa-th"></i> Benefits</a>
    <a href="#galeriImages"   onclick="showGaleriImages()" ><i class="fa fa-th-list"></i> Galeri Kami</a>    
    <a href="#services"   onclick="showProductItems()" ><i class="fa fa-th"></i> Services</a>
    <!-- <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a> -->
  
<!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>



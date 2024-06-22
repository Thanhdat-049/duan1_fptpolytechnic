
<!--start page content-->
<div class="page-content">


   <!--start breadcrumb-->
   <div class="py-4 border-bottom">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0"> 
          <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop With Grid</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="section-padding">
    <div class="container">
      <div class="d-flex align-items-center px-3 py-2 border mb-4">
        <div class="text-start">
          <h4 class="mb-0 h4 fw-bold">Account - Dashboard</h4>
       </div>
      </div>
     <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
       <div class="row">
       <?php
        include "view/boxleft.php";
        ?>
          
          <div class="col-12 col-xl-9">
             <div class="card rounded-0 bg-light">
                 <div class="card-body">
                   <div class="d-flex flex-wrap flex-row align-items-center gap-3">
                     <div class="profile-pic">
                        <img src="assets/images/avatars/01.jpg" width="140" alt="">
                     </div>  
                     <div class="profile-email flex-grow-1">
                       <p class="mb-0 fw-bold text-content">michel@example.com</p>
                     </div>
                     <div class="edit-button align-self-start">
                       <a href="account-edit-profile.html" class="btn btn-outline-dark btn-ecomm"><i class="bi bi-pencil-fill me-2"></i>Edit Profile</a>
                     </div>
                   </div>
                 </div>
             </div>

             <div class="row row-cols-1 row-cols-lg-3 g-4 pt-4">
               <div class="col">
                 <a href="account-orders.html">
                  <div class="card rounded-0">
                    <div class="card-body p-5">
                        <div class="text-center">
                           <div class="fs-2 mb-3 text-content"><i class="bi bi-box-seam"></i></div>
                           <h6 class="mb-0">Orders</h6>
                        </div>
                    </div>
                  </div>
                 </a>
               </div>
               <div class="col">
                <a href="wishlist.html">
                <div class="card rounded-0">
                  <div class="card-body p-5">
                      <div class="text-center">
                         <div class="fs-2 mb-3 text-content"><i class="bi bi-suit-heart"></i></div>
                         <h6 class="mb-0">Wishlist</h6>
                      </div>
                  </div>
                </div>
               </a>
               </div>
               <div class="col">
                <a href="account-orders.html">
                <div class="card rounded-0">
                  <div class="card-body p-5">
                      <div class="text-center">
                         <div class="fs-2 mb-3 text-content"><i class="bi bi-arrow-clockwise"></i></div>
                         <h6 class="mb-0">Returns</h6>
                      </div>
                  </div>
                </div>
               </a>
               </div>
               <div class="col">
                <a href="account-saved-address.html">
                <div class="card rounded-0">
                  <div class="card-body p-5">
                      <div class="text-center">
                         <div class="fs-2 mb-3 text-content"><i class="bi bi-geo-alt"></i></div>
                         <h6 class="mb-0">Addresses</h6>
                      </div>
                  </div>
                </div>
               </a>
               </div>
               <div class="col">
                <a href="javascript:;">
                <div class="card rounded-0">
                  <div class="card-body p-5">
                      <div class="text-center">
                         <div class="fs-2 mb-3 text-content"><i class="bi bi-bookmarks"></i></div>
                         <h6 class="mb-0">Coupons</h6>
                      </div>
                  </div>
                </div>
               </a>
               </div>
               <div class="col">
                <a href="account-profile.html">
                <div class="card rounded-0">
                  <div class="card-body p-5">
                      <div class="text-center">
                         <div class="fs-2 mb-3 text-content"><i class="bi bi-person"></i></div>
                         <h6 class="mb-0">Profile Details</h6>
                      </div>
                  </div>
                </div>
               </a>
               </div>

             </div><!--end row-->


          </div>
       </div><!--end row-->
    </div>
  </section>
   <!--start product details-->


  
  
 </div>
  <!--end page content-->

  
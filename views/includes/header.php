<?php 
$name = $_SESSION['fname']. " " .$_SESSION['lname']; 
?>

<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled">
        <!-- ======= Menu collapse Icon ===== -->
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="fa fa-bars"></i>
          </a>
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
            <i class="fa fa-bars"></i>
          </a>
        </li>
        <li class="dropdown pc-h-item d-inline-flex d-md-none">
          <a
            class="pc-head-link dropdown-toggle arrow-none m-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false"
          >
            <i class="fa fa-search"></i>
          </a>
          <div class="dropdown-menu pc-h-dropdown drp-search">
            <form class="px-3">
              <div class="form-group mb-0 d-flex align-items-center">
                <i data-feather="search"></i>
                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
              </div>
            </form>
          </div>
        </li>
        <li class="pc-h-item d-none d-md-inline-flex">
          <form class="header-search">
            <i data-feather="search" class="icon-search"></i>
            <input type="search" class="form-control" placeholder="Search here. . .">
          </form>
        </li>
      </ul>
    </div>
    <!-- [Mobile Media Block end] -->
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false"
          >
            <i class="far fa-envelope"></i>
          </a>
          <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
            <div class="dropdown-header d-flex align-items-center justify-content-between">
              <h5 class="m-0">Message</h5>
              <a href="#!" class="pc-head-link bg-transparent"><i class="fa fa-x text-danger"></i></a>
            </div>
            <div class="dropdown-divider"></div>
            <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
              <div class="list-group list-group-flush w-100">
                <a class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img src="assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                    </div>
                    <div class="flex-grow-1 ms-1">
                      <span class="float-end text-muted">3:00 AM</span>
                      <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                      <span class="text-muted">2 min ago</span>
                    </div>
                  </div>
                </a>
                <a class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img src="assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar">
                    </div>
                    <div class="flex-grow-1 ms-1">
                      <span class="float-end text-muted">6:00 PM</span>
                      <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                      <span class="text-muted">5 August</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="text-center py-2">
              <a href="#!" class="link-primary">View all</a>
            </div>
          </div>
        </li>
        <li class="dropdown pc-h-item header-user-profile">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            data-bs-auto-close="outside"
            aria-expanded="false"
          >
            <img src="assets/images/user/avatar-4.jpg" alt="user-image" class="user-avtar">
            <span><?php echo $name; ?></span>
          </a>
          <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
            <div class="dropdown-header">
              <div class="d-flex mb-1">
                <div class="flex-shrink-0">
                  <img src="assets/images/user/avatar-4.jpg" alt="user-image" class="user-avtar wid-35">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1"><?php echo $name; ?></h6>
                </div>
                <a href="/treasurebank/logout" class="pc-head-link bg-transparent"><i class="fa fa-power text-danger"></i></a>
              </div>
            </div>
            <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="drp-t1"
                  data-bs-toggle="tab"
                  data-bs-target="#drp-tab-1"
                  type="button"
                  role="tab"
                  aria-controls="drp-tab-1"
                  aria-selected="true"
                  ><i class="fa fa-user"></i> Profile</button
                >
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="drp-t2"
                  data-bs-toggle="tab"
                  data-bs-target="#drp-tab-2"
                  type="button"
                  role="tab"
                  aria-controls="drp-tab-2"
                  aria-selected="false"
                  ><i class="fa fa-gear"></i> Setting</button
                >
              </li>
            </ul>
            <div class="tab-content" id="mysrpTabContent">
              <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
                <a href="/treasurebank/edit_profile" class="dropdown-item">
                  <i class="fa fa-edit"></i>
                  <span>Edit Profile</span>
                </a>
                <a href="/treasurebank/view_profile" class="dropdown-item">
                  <i class="fa fa-eye"></i>
                  <span>View Profile</span>
                </a>
                <a href="/treasurebank/logout" class="dropdown-item">
                  <i class="fa fa-power"></i>
                  <span>Logout</span>
                </a>
              </div>
              <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
                <a href="#!" class="dropdown-item">
                  <i class="fa fa-hands-helping"></i>
                  <span>Support</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fa fa-user"></i>
                  <span>Account Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fa fa-lock"></i>
                  <span>Privacy Center</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fa fa-message"></i>
                  <span>Feedback</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fa fa-list"></i>
                  <span>History</span>
                </a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
 </div>
</header>
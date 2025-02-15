<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
  <div class="sidebar">
    <!-- User Widget -->
    <div class="widget user-dashboard-profile">
      <!-- User Image -->
      <div class="profile-thumb">
        <img src="{{ asset('assets/images/user/user-thumb.jpg') }}" alt="" class="rounded-circle">
      </div>
      <!-- User Name -->
      <h5 class="text-center">{{auth()->user()->name}}</h5>
      {{--      <p>Joined February 06, 2017</p>--}}
      <p>Joined at {{auth()->user()->created_at->format('M d, Y')}}</p>
    </div>
    <!-- Dashboard Links -->
    <div class="widget user-dashboard-menu">
      <ul>
        {{--        <li class="active"><a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>--}}
        <li><a href="{{ route('member.books.index') }}"><i class="fa fa-user"></i> My Books <span>5</span></a></li>
        <li><a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> My Orders <span>5</span></a></li>
        <li><a href="dashboard-archived-ads.html"><i class="fa fa-bookmark-o"></i>My Sells <span>12</span></a></li>
        <li><a href="dashboard-pending-ads.html"><i class="fa fa-bookmark-o"></i> Lendign Requests<span>23</span></a>
        </li>
        <li><a href="{{ route('member.profile.settings.get') }}"><i class="fa fa-cog"></i>Settings</a></li>
        {{--        <li><a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete--}}
        {{--            Account</a></li>--}}
      </ul>
    </div>

    <!-- delete-account modal -->
    <!-- delete account popup modal start-->
    <!-- Modal -->
    <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
            <h6 class="py-2">Are you sure you want to delete your account?</h6>
            <p>Do you really want to delete these records? This process cannot be undone.</p>
            <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
          </div>
          <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>
    <!-- delete account popup modal end-->
    <!-- delete-account modal -->

  </div>
</div>

<!-- 33. resources/views/partials/navigation/student_nav.blade.php -->




<!-- 31. resources/views/partials/navigation/admin_nav.blade.php -->



<!-- Box icon CSS   -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<!-- End -->

<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-'></i>
      <span class="logo_name">Menu</span>
    </div>
      <ul class="nav-links">
    <li>
      <a href="{{ route('home') }}">
        <i class='bx bx-home'></i>
        <span class="link_name">Home</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="{{ route('home') }}">Home</a></li>
      </ul>
    </li>
    <li>
      <a href="{{ route('admin.dashboard') }}">
        <i class='bx bxs-credit-card'></i>
        <span class="link_name">Dashboard</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      </ul>
    </li>
    <li>
      <div class="icon-link">
        <a href="#">
          <i class='bx bx-bulb'></i>
          <span class="link_name">Solutions</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Modules</a></li>
        <li><a href="{{ route('notifications.index') }}">Notification</a></li>
        <li><a href="{{ route('announcements.index') }}">Announcements</a></li>
        <li><a href="{{ route('notifications.index') }}">Courses</a></li>
        <li><a href="{{ route('reports.index') }}">Reports</a></li>
        <li><a href="{{ route('task-assignments.index') }}">Task Assignments</a></li>
        <li><a href="{{ route('resource-links.index') }}">Resource Links</a></li>
        <li><a href="{{ route('file-uploads.index') }}">File Uploads</a></li>
        <li><a href="{{ route('qualification-proofs.index') }}">Qualification Proofs</a></li>
        <li><a href="{{ route('schedules.index') }}">Schedules</a></li>
        <li><a href="{{ route('notifications.index') }}">Programe</a></li>
      </ul>
    </li>
    <li>
      <div class="icon-link">
        <a href="#">
          <i class='bx bx-news'></i>
          <span class="link_name">Posts</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Posts</a></li>
        <li><a href="#">Recent</a></li>
        <li><a href="#">Trending</a></li>
        <li><a href="#">Most Visited</a></li>
      </ul>
    </li>
    <li>
      <div class="icon-link">
        <a href="#">
          <i class='bx bx-file-find'></i>
          <span class="link_name">Insights</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Insights</a></li>
        <nav>
            <ul>
                <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('courses.index') }}">Courses</a></li>
                <li><a href="{{ route('live-classes.index') }}">Live Classes</a></li>
                <li><a href="{{ route('assignments.index') }}">Assignments</a></li>
                <li><a href="{{ route('attendance.index') }}">Attendance</a></li>
                <li><a href="#">Performance</a></li>
                <li><a href="{{ route('notifications.index') }}">Notifications</a></li>
                <li><a href="{{ route('profile.index') }}">Profile</a></li>
            </ul>
        </nav>
    </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-bar-chart'></i>
        <span class="link_name">Chart</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Chart</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-compass'></i>
        <span class="link_name">Explore</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Explore</a></li>
      </ul>
    </li>
    
    <li>
      <a href="#">
        <i class='bx bx-cog'></i>
        <span class="link_name">Setting</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Setting</a></li>
      </ul>
    </li>
    <li>
      <div class="profile-details">
        <div class="profile-content">
        <img src="{{ asset('user-profile/' . Auth::user()->name . '.JPG') }}" alt="profileImg">
        </div>
        <div class="name-job">
          <div class="profile_name">{{ Auth::user()->name }}</div>
          <div class="job">{{ session('user_role') }}</div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            @method('POST')
        </form>

        <!-- Logout Icon -->
        <i class='bx bx-log-out' onclick="document.getElementById('logout-form').submit();"></i>

        <!-- <i class='bx bx-log-out'></i> -->
      </div>
    </li>
  </ul>

</div>


<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> LabForBeer</a></div>

<div class="sl-sideleft">
    <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
    </div>

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
        <a href="{{route('dashboard')}}" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div>
        </a>
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Tasks</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('tasks.all')}}" class="nav-link">All</a></li>
            <li class="nav-item"><a href="{{route('tasks.new')}}" class="nav-link">New</a></li>
            <li class="nav-item"><a href="{{route('tasks.progress')}}" class="nav-link">In Progress</a></li>
            <li class="nav-item"><a href="{{route('tasks.cancelled')}}" class="nav-link">Cancelled</a></li>
            <li class="nav-item"><a href="{{route('tasks.done')}}" class="nav-link">Done</a></li>
        </ul>
        <br>
    </div>

</div>

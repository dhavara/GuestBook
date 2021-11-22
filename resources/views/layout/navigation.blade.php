<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<div>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link @if($title == 'Home') {{'active'}} @endif" href="/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($title == 'My Project') {{'active'}} @endif" href="/myproject">My Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($title == 'My Course') {{'active'}} @endif" href="/mycourse">My Course</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($title == 'Students') {{'active'}} @endif" href="/students">Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if($title == 'My Contact') {{'active'}} @endif" href="/contact">My Contact</a>
        </li>
        
    </ul>
</div>
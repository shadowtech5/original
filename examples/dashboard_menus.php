<?php
    $page_active = (string)$_SERVER["REQUEST_URI"];
?>
<div class="logo">
	<a href="#" class="simple-text">
		BookMyAnchors
	</a>
</div>

<div class="sidebar-wrapper">
	<ul class="nav">
        <li
        <?php
            if(strpos($page_active,'dashboard.php'))
            {
        ?>
          class="active" 
        <?php 
            }
        ?>
        >
            <a href="dashboard.php">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>

        <li 
        <?php
            if(strpos($page_active,'user.php'))
            {
        ?>
          class="active" 
        <?php 
            }
        ?>
        >
            <a href="user.php">
                <i class="material-icons">person</i>
                <p>User Profile</p>
            </a>
        </li>
        <li
        <?php
            if(strpos($page_active,'table.php'))
            {
        ?>
          class="active" 
        <?php 
            }
        ?>
        >
            <a href="table.php">
                <i class="material-icons">content_paste</i>
                <p>Table</p>
            </a>
        </li>
        <li
        <?php
            if(strpos($page_active,'calender.php'))
            {
        ?>
          class="active" 
        <?php 
            }
        ?>
        >
            <a href="calender.php">
                <i class="material-icons">library_books</i>
                <p>Calender</p>
            </a>
        </li>
    </ul>
</div>
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><?php echo '<img src="data:photo;base64,'.base64_encode($_SESSION['user']->getPhoto()).'" class="img-circle" width="80">'; ?></a></p>
            <h5 class="centered"><?php echo $_SESSION['user']->getPrenom().' '.$_SESSION['user']->getNoms();  ?></h5>
            <li class="mt">
                <a href="blank.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="#">
                    <i class="fa fa-desktop"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="projets.php">
                    <i class="fa fa-cogs"></i>
                    <span>Projets et taches</span>
                </a>

            </li>
            <li class="sub-menu">
                <a  href="agent.php">
                    <i class="fa fa-book"></i>
                    <span>Agents</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Gestion de tâches</a>
    <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="navlink" href="/accueil">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/apropos">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="/taches">Tâches</a>
            </li>
        <!-- PROFILE DROPDOWN - scrolling off the page to the right -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdowntoggle" id="navDropDownLink" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" arialabelledby="navDropDownLink">
                    <a class="dropdown-item" href="#">Preferences</a>
                <div class="dropdown-divider">
                
                </div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
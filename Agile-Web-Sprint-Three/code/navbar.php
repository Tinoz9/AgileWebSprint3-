<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color:white; font-size: 20px;">Acme Arts</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" style="color:white; font-size: 20px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Display
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="font-size: 20px;" href="displaypaintings.php">Paintings Gallery</a></li>
            <li><a class="dropdown-item" style="font-size: 20px;" href="displayartist.php">Artists Gallery</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" style="color:white; font-size: 20px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Extra
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="font-size: 20px;" href="custom.php">Edit Paintings Section</a></li>
            <li><a class="dropdown-item" style="font-size: 20px;" href="customartist.php">Edit Artists Section</a></li>
          </ul>
        </li>
      </ul>
      <a class="button1" href="subscribe.php" style="color:white; font-size: 20px;">Subscribe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="unsubscribe.php" style="color:white; font-size: 20px;">Unsubscribe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</nav>
<body>
  <style>
    .button1 {
      background-color: #1c87c9;
      -webkit-border-radius: 60px;
      border-radius: 60px;
      border: none;
      color: #eeeeee;
      cursor: pointer;
      display: inline-block;
      font-family: sans-serif;
      font-size: 20px;
      padding: 5px 15px;
      text-align: center;
      text-decoration: none;
}
@keyframes glowing {
  0% {
    background-color: #fa0505;
    box-shadow: 0 0 3px #fa0505;
  }
  10% {
    background-color: #fa8405;
    box-shadow: 0 0 10px #fa8405;
  }
  20% {
    background-color: #faee05;
    box-shadow: 0 0 10px #faee05;
  }
  30% {
    background-color: #73fa05;
    box-shadow: 0 0 10px #73fa05;
  }
  40% {
    background-color: #05faee;
    box-shadow: 0 0 10px #05faee;
  }
  50% {
    background-color: #058cfa;
    box-shadow: 0 0 10px #058cfa;
  }
  60% {
    background-color: #0505fa;
    box-shadow: 0 0 10px #0505fa;
  }
  70% {
    background-color: #9805fa;
    box-shadow: 0 0 10px #9805fa;
  }
  80% {
    background-color: #fa05fa;
    box-shadow: 0 0 10px #fa05fa;
  }
  90% {
    background-color: #fa058c;
    box-shadow: 0 0 10px #fa058c;
  }
  100% {
    background-color: #fa0505;
    box-shadow: 0 0 3px #fa0505;
  }
}
.button1 {
      animation: glowing 4000ms infinite;
}
  </style>
</body>

      
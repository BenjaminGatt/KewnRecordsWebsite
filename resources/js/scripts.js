function displayNextImage() {
  x = x === images.length - 1 ? 0 : x + 1;
  document.getElementById("banner-img").src = images[x];
}

function displayPreviousImage() {
  x = x <= 0 ? images.length - 1 : x - 1;
  document.getElementById("banner-img").src = images[x];
}

function startTimer() {
  setInterval(displayNextImage, 6000);
}

let images = [],
  x = -1;
images[0] = "/resources/img/banner/NIKET-Banner Announcement-min.jpg";
images[1] = "/resources/img/banner/400ppm-Banner-outnow-min.jpg";
images[2] = "/resources/img/banner/BILA_Banner_OUT_NOW.jpg";
images[3] = "/resources/img/banner/Bila_launch_banner_deheb_incens_u.jpg";
images[4] = "/resources/img/banner/kewn_mixtape - Copy2.png";
images[5] = "/resources/img/banner/400ppm_banner.jpg";
images[6] = "/resources/img/banner/Bila_Bestjarju_banner.jpg";

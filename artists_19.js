var countDownDate = new Date("Oct 10, 2021 08:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countDown").innerHTML = "<b style='font-size:120%;'>2021 ACL Count Down: </b>" + days + " Days " + hours + " Hours "
    + minutes + " Minutes " + seconds + " Seconds";
    if (distance < 0) {
    clearInterval(x);
    document.getElementById("countDown").innerHTML = "ACL IS ON NOW - GO GO GO!";
    }
}, 1000);

// When the user scrolls the page, execute myFunction
window.onscroll = function() {stickyScroll()};

// Get the navbar
var navbar = document.getElementById("NaviBar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyScroll() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function artistPage(id){
    // Get artist name for id
    artist_name = document.getElementById(id).innerHTML

    // Delete all the artist names currently on the screen
    for(i = 0;i < 128;i++){
        document.getElementById(i.toString()).innerHTML = ""
    }

    // Concatenate strings to create youtube URL to video
    document.getElementById("name").innerHTML = artist_name

    // We have to split artist name into individual words so they have a "+" in between them
    artist_name = artist_name.toLowerCase()
    artist_list = artist_name.split(" ")
    str1 = "https://www.youtube.com/results?search_query="
    str1 = str1.concat(artist_list[0])
    for(i = 1;i < artist_list.length;i++){
        str2 = "+".concat(artist_list[i])
        str1 = str1.concat(str2)
    }
    str3 =  "+acl+2019"
    str = str1.concat(str3)
    video = document.createElement('video')
    video.src = str.concat(".ogg");
    video.autoplay = true
}
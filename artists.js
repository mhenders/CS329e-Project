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

function artistPage(id){
    // Get artist name for id
    artist_name = document.getElementById(id).innerHTML
    // Concatenate strings to create youtube URL to video
    document.getElementById("name").innerHTML = artist_name.toUpperCase()

    // We have to split artist name into individual words so they have a "+" in between them
    artist_name = artist_name.toLowerCase()
    artist_list = artist_name.split(" ")
    str1 = (artist_list[0])

    for(i = 1;i < artist_list.length;i++){
        str2 = "+".concat(artist_list[i])
        str1 = str1.concat(str2)
    }
    year = document.getElementById("year").innerHTML
    str3 =  "+acl+"
    str4 = str3.concat(year)
    str = str1.concat(str4)
    getVideo(str);
}

function searchBar(artist_name){
    document.getElementById("name").innerHTML = artist_name.toUpperCase()
    artist_name = artist_name.toLowerCase()
    artist_list = artist_name.split(" ")
    str1 = (artist_list[0])

    for(i = 1;i < artist_list.length;i++){
        str2 = "+".concat(artist_list[i])
        str1 = str1.concat(str2)
    }
    year = document.getElementById("year").innerHTML
    str3 =  "+acl+"
    str4 = str3.concat(year)
    str = str1.concat(str4)
    getVideo(str);
}

function getVideo(str) {
      $.ajax({
        type: 'GET',
        url: 'https://www.googleapis.com/youtube/v3/search',
        data: {
            key: 'AIzaSyA4ApO7Jw2DfNqcE6Stcl8lnPb0mOMNM-A',
            q: str,
            part: 'snippet',
            maxResults: 1,
            type: 'video',
            videoEmbeddable: true,
        },
        success: function(data){
            embedVideo(data)
        },
        error: function(response){
            console.log("Request Failed");
        }
      });
}

function embedVideo(data) {
    $('iframe').attr('src', 'https://www.youtube.com/embed/' + data.items[0].id.videoId)
    $('h3').text(data.items[0].snippet.title)
    $('.description').text(data.items[0].snippet.description)
}

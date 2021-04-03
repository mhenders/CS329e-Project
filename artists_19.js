function assignNames()
{
    // Read in the text file containing artist names
    file = "file://artists_19.txt"
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                // Here we split the text into an array of strings containing the artist names
                var lines = allText.split("\n")
                // Use for loop to assign each name of a tag
                for(i = 0;i < 128;i++){
                    document.getElementById(i.toString()).innerHTML = lines[i].toUpperCase()
                }
            }
        }
    }
    rawFile.send(null);
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
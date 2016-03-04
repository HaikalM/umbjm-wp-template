var channelName = "uchicago";

var APIkey = "AIzaSyAYrEwgdUWNN0hb1FbDa71uTjnQIEXrepQ"
// panggil data
jQuery(document).ready(function(){
  // jQuery.get(
  //   "https://www.googleapis.com/youtube/v3/channels",{
  //     part: "contentDetails",
  //     forUsername: channelName,
  //     key: APIkey},
  //     // ambil data dari API
  //     function(data){
  //       console.log(data)
  //       jQuery.each(data.items, function(i, item){
  //         console.log(item);
  //         // ambil data playlist id
  //         pid =  item.contentDetails.relatedPlaylists.uploads
  //         cid = item.id
  //         // buat fungsi mengambil video
  //         getVids(pid);
  //         // getCount(cid);
  //         // console.log(item.id)
  //       })
  //     }
  // );
  cid = "UCYbDhQVJdTTocyZXSp3n-SA";
  pid = "PL4QePBEDAcjXCgEZ5tEa2UxFn86AIFue0";
  // tampilkan video terbaru
  function getVids(pid) {
    console.log("youtube API");
    jQuery.get(
      "https://www.googleapis.com/youtube/v3/playlistItems",{
        
        // jumlah yang akan ditampilkan
        maxResults: 3,
        playlistId: pid,
        channelId:cid,
        key: APIkey,
        part: "snippet"},
        // ambil data dari API
        function(data){
          var output;
          jQuery.each(data.items, function(i, item){
            // console.log(item);
            // panggil judul video
            vidJudul = item.snippet.title;
            // panggil video id
            vidId = item.snippet.resourceId.videoId;
            // styling data dari API
            console.log(vidId);
            output = '<div class=\"col-xs-6 col-md-4\"><a href=\"https://youtu.be/'+vidId+'\" target=\"_blank\"><div class=\"thumbnail\"><img src=\"http://img.youtube.com/vi/'+vidId+'/sddefault.jpg\" alt=\"+vidJudul+\"><div class=\"caption\"><h5>'+vidJudul+'</h5></div></div></a></div>';

            // inject ke halaman html
            jQuery('#youtube-api').append(output);
            jQuery('#youtube-api .loader').hide();
          })
    });
  }
  getVids(pid);
});


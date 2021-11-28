const ejecutarAjax = () => {  
    const divVideos = document.getElementById("youtubeVideos");
    const basedYoutube = "https://www.youtube.com/embed/";
  
    const apiKey = "AIzaSyD7FTdoOQwN2TdqFpRi_Xc3Wp-jXDHLaDE";
    const searchTerm = "English lessons";
    const url = `https://www.googleapis.com/youtube/v3/search/?part=snippet&key=${apiKey}&q=${searchTerm}&maxResult=5`;
    const ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function () {
      if (ajaxRequest.readyState === 4 && ajaxRequest.status == 200) {
        const videos = JSON.parse(ajaxRequest.responseText).items;
        for (let el of videos) {
          const videoCode = el.id.videoId;
          const myLink = document.createElement("a");
          myLink.setAttribute("href", `${basedYoutube}${videoCode}?rel=0`);
          const frame = document.createElement("iframe");
          frame.setAttribute("src", `${basedYoutube}${videoCode}`);
          frame.style.width = "640px";
          frame.style.height = "480px";
          divVideos.appendChild(frame);
        }
      }
    };
    ajaxRequest.open("GET", url, true);
    ajaxRequest.send();
  };
  